FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
# Install dependencies without executing scripts (like artisan) since .env isn't present yet
RUN composer install --no-dev --no-interaction --prefer-dist --ignore-platform-reqs --no-scripts

FROM node:20 AS frontend
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY . .
RUN npm run build

FROM php:8.4-apache
WORKDIR /var/www/html

# 1. Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# 2. Change Apache Document Root to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 3. Install required PHP extensions (SQLite, GD, Zip, etc)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    libzip-dev \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_sqlite zip

# 4. Copy the Laravel application code
COPY . .

# 5. Copy vendor and frontend build from previous stages
COPY --from=vendor /app/vendor/ ./vendor/
COPY --from=frontend /app/public/build/ ./public/build/

# 6. Ensure Laravel storage and bootstrap cache are writable by Apache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 7. Expose Port 80
EXPOSE 80

# 8. Copy and set entrypoint
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["docker-entrypoint.sh"]

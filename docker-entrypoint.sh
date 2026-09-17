#!/bin/bash
set -e

if [ ! -f .env ]; then
    echo "Creating .env from .env.example"
    cp .env.example .env
    php artisan key:generate --force
fi

if [ ! -f database/database.sqlite ]; then
    echo "Creating SQLite database"
    touch database/database.sqlite
fi

echo "Running migrations"
php artisan migrate --force

# Make sure permissions are correct for SQLite and storage
chown -R www-data:www-data database storage bootstrap/cache

# Start Apache in the foreground
exec apache2-foreground

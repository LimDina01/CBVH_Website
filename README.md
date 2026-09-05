# Website Project

This is a Laravel-based website project utilizing Vite and Tailwind CSS.

## Prerequisites

Before you begin, ensure you have the following installed on your new computer:

- **PHP**: Version 8.3 or higher.
- **Composer**: Dependency manager for PHP.
- **Node.js & npm**: Required for compiling frontend assets (Vite and Tailwind CSS).
- **Git**: For version control.
- **SQLite**: The project uses SQLite by default for its database.

## Installation & Setup Guide

Follow these steps to set up the project on a new machine:

### 1. Clone the Repository
Clone the project to your local machine and navigate into the project directory:
```bash
git clone <repository-url>
cd website
```

### 2. Install PHP Dependencies
Install the required PHP packages using Composer:
```bash
composer install
```

### 3. Setup Environment Configuration
Copy the example environment file to create your local `.env` file:
```bash
cp .env.example .env
```
*(On Windows Command Prompt, use `copy .env.example .env`)*

### 4. Generate Application Key
Generate a unique application key for Laravel encryption:
```bash
php artisan key:generate
```

### 5. Create and Migrate Database
The project uses SQLite. You can create the database file and run the migrations to set up the tables:
```bash
# Create an empty SQLite database file
touch database/database.sqlite
# (On Windows, you can use: type nul > database\database.sqlite)

# Run the database migrations
php artisan migrate
```

### 6. Install Frontend Dependencies
Install the required Node packages (Vite, Tailwind, etc.):
```bash
npm install
```

### 7. Build Frontend Assets
Compile the CSS and JavaScript assets:
```bash
# For production build
npm run build

# Alternatively, for development with hot-reloading, run:
npm run dev
```

## Running the Application Locally

Once the setup is complete, you can start the Laravel development server:

```bash
php artisan serve
```

The application will be accessible in your browser, typically at `http://localhost:8000` or `http://127.0.0.1:8000`.

## Quick Setup Command
Alternatively, the project includes a custom Composer script that automates many of the setup steps. After cloning and running `composer install`, you can try running:
```bash
composer run setup
```
This script will automatically copy the `.env` file, generate the key, migrate the database, install NPM dependencies (`npm install`), and build the frontend assets (`npm run build`).

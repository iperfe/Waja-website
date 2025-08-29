#!/usr/bin/env bash
# Exit on error
set -o errexit

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install JS dependencies & build assets
npm install
npm run build

# Cache config and routes
php artisan config:cache
php artisan route:cache
php artisan view:cache

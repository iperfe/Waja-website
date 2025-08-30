# Stage 1: Build frontend assets with Node
FROM node:18 as build

WORKDIR /app

# Copy package.json and lock file if exists
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy all frontend files
COPY . .

# Build assets (this will create public/build with manifest.json)
RUN npm run build


# Stage 2: PHP with Apache
FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working dir
WORKDIR /var/www/html

# Copy Laravel files
COPY . .

# Copy built frontend assets from Node
COPY --from=build /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Update Apache config to point to public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

EXPOSE 80

CMD ["apache2-foreground"]

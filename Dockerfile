# -------------------
# Stage 1: Composer dependencies
# -------------------
FROM composer:2.6 AS composer_stage

WORKDIR /app

# Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# -------------------
# Stage 2: Node (Vite + Tailwind build)
# -------------------
FROM node:18 AS node_stage

WORKDIR /app

# Copy package.json (no package-lock.json in your case)
COPY package.json ./

# Install dependencies
RUN npm install

# Copy rest of frontend files (resources, vite.config.js, etc.)
COPY resources ./resources
COPY vite.config.* ./

# Build assets
RUN npm run build

# -------------------
# Stage 3: Final image with Apache + PHP
# -------------------
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache rewrite
RUN a2enmod rewrite

WORKDIR /var/www/html

# Copy application code
COPY . .

# Copy composer dependencies from stage 1
COPY --from=composer_stage /app/vendor ./vendor

# Copy built frontend assets from stage 2
COPY --from=node_stage /app/public/build ./public/build

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Configure Apache to serve Laravel from public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

EXPOSE 80
CMD ["apache2-foreground"]

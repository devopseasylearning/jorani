FROM composer as composer
COPY composer.json composer.lock ./
RUN composer install --ignore-platform-reqs --no-dev

FROM php:8.1-apache

# Install required dependencies (excluding LDAP)
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    pkg-config \
    && docker-php-ext-configure zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set PHP production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy application files
COPY --from=composer /app/vendor /var/www/html/vendor
COPY . .

# Fix ownership permissions
RUN chown -R www-data:www-data application/logs local/upload/leaves/

# Copy configuration files
COPY docker/config.php docker/database.php docker/email.php application/config/


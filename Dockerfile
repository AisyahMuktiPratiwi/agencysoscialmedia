# Menggunakan image dasar PHP dengan FPM
FROM php:8.1-fpm

# Install dependencies sistem
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git

# Install ekstensi PHP yang diperlukan
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set direktori kerja
WORKDIR /var/www/html

# Salin file aplikasi
COPY . .

# Install dependencies aplikasi dengan Composer
RUN composer install --no-dev --optimize-autoloader

# Set hak akses
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 9000
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]







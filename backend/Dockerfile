FROM php:8.2-cli


RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


WORKDIR /var/www


COPY . .

RUN composer install


EXPOSE 9000


CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=9000"]

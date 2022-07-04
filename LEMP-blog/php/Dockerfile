FROM php:8.1-fpm
COPY php.ini /usr/local/etc/php/
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
RUN apt-get update && \
    apt-get install -y gnupg vim zip unzip && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install mysqli
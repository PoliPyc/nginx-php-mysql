FROM php:7.3-fpm-alpine3.9
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN apk add zlib-dev libzip-dev
RUN docker-php-ext-install -j$(nproc) pdo pdo_mysql zip

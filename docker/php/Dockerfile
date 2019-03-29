FROM php:7.3-fpm-alpine3.9
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN apk add zlib-dev libzip-dev libpng-dev icu-dev
RUN docker-php-ext-configure intl
RUN docker-php-ext-install -j$(nproc) gd intl pdo pdo_mysql opcache zip

ARG PHP_VER=fpm-alpine

FROM php:${PHP_VER}

ARG USER_ID=1000
ARG XDEBUG_VER=

COPY --from=ghcr.io/mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
COPY --from=composer /usr/bin/composer /usr/local/bin/composer

RUN apk add --no-cache \
    git \
    unzip \
    curl \
    && mkdir -p /.composer \
    && chown -R ${USER_ID}:${USER_ID} /.composer \
    && composer clear-cache

RUN install-php-extensions \
    pdo_mysql \
    intl \
    pcntl \
    pdo_pgsql \
    gd \
    imagick \
    memcached \
    xdebug

COPY ./config/. $PHP_INI_DIR/

WORKDIR /var/www

ENTRYPOINT ["php-fpm"]
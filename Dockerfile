FROM php:7.3-rc-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends  libpq-dev libpq5 \
    && docker-php-ext-install pgsql pdo_pgsql\
    && apt-get purge -y --auto-remove libpq-dev \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html

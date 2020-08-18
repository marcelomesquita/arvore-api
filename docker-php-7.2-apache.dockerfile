FROM php:7.2-apache

# dependecies
RUN apt-get update && apt-get install -y \
    autoconf \
    curl \
    git \
    libmcrypt-dev \
    make \
    unzip \
    wget

RUN docker-php-ext-install pdo pdo_mysql

# modules
RUN a2enmod rewrite
RUN a2enmod headers

# composer
ENV COMPOSER_HOME /composer
ENV COMPOSER_ALLOW_SUPERUSER 1

ENV PATH /composer/vendor/bin:$PATH

RUN curl -o /tmp/composer-setup.php https://getcomposer.org/installer \
    && curl -o /tmp/composer-setup.sig https://composer.github.io/installer.sig \
    && php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }" \
    && php /tmp/composer-setup.php --no-ansi --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /tmp/composer-setup.php

EXPOSE 80

FROM php:5.6-apache
RUN apt-get update \
    && curl -sS https://getcomposer.org/installer | php && mv /var/www/html/composer.phar /usr/local/bin/composer \
    && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev git unzip \
    && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv mcrypt\
    && a2enmod rewrite

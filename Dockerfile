FROM php:8.1.7-apache

ADD https://github.com/DataDog/dd-trace-php/releases/download/0.70.0/datadog-php-tracer_0.70.0_amd64.deb .
RUN dpkg -i datadog-php-tracer_0.70.0_amd64.deb

RUN apt-get update && apt-get install -y unzip \
    && rm -r /var/lib/apt/lists/*

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions memcached mysqli pdo pdo_mysql zip

RUN ln -s $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

WORKDIR /var/www/app

COPY . .
COPY docker/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY docker/app.conf /etc/apache2/conf-enabled/z-app.conf
COPY docker/app.ini $PHP_INI_DIR/conf.d/app.ini

COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer
RUN composer install --prefer-dist --no-progress --no-suggest --no-ansi --no-interaction


#COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN curl -sL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs
RUN curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt update && apt install yarn
#RUN curl --compressed -o- -L https://yarnpkg.com/install.sh | bash

RUN mkdir -p bootstrap/cache && chown -R www-data:www-data bootstrap/cache storage
RUN a2enmod headers rewrite

FROM php:7.2-fpm-stretch
WORKDIR /var/www

ENV ACCEPT_EULA=Y

RUN apt-get update && apt-get install -y curl gnupg apt-transport-https

RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/9/prod.list > /etc/apt/sources.list.d/mssql-release.list

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    nano bash

RUN apt-get -y --no-install-recommends install \
    git zip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libmcrypt-dev \
    mariadb-client libmagickwand-dev \
    unixodbc-dev \
    msodbcsql17 \
    mssql-tools \
    unzip

RUN docker-php-ext-install pdo_mysql zip opcache \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd opcache \
    && pecl install sqlsrv pdo_sqlsrv mcrypt-1.0.2  \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv opcache mcrypt

RUN curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY php-docker.ini /usr/local/etc/php/php.ini

RUN composer global require hirak/prestissimo

RUN echo 'alias a="php artisan"' >> ~/.bashrc
RUN chown -R www-data:www-data /var/www


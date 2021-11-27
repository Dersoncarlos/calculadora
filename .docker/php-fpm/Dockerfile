# Base image
FROM php:7.4-fpm

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Run apt update and install some dependancies needed for docker-php-ext
RUN apt-get update \
    && apt-get -y install \
    unixodbc-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    && apt-get clean; 

RUN docker-php-ext-install opcache

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini 

# Install PHP extensions    
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && mv composer.phar /usr/local/bin/composer

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; 

RUN apt-get update \
    && apt-get -y install zip \
    && apt-get clean; 

#LIBS EXTRAS
RUN docker-php-ext-install bcmath
RUN apt-get install -y libbz2-dev
RUN docker-php-ext-install bz2

#GD
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

#PDO - CUSTOMIZAR A SEU DISPOR
RUN docker-php-ext-install pdo_mysql

RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

FROM php:7.1-fpm

RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Istanbul /etc/localtime

RUN apt-get update && apt-get install git-core libzip-dev -y \
    && docker-php-ext-install zip
RUN apt-get install -y autoconf g++ make openssl libssl-dev libcurl4-openssl-dev
RUN apt-get install -y libcurl4-openssl-dev pkg-config
RUN apt-get install -y libsasl2-dev

RUN pecl install mongodb
RUN ls -all /usr/local/lib/php/extensions/no-debug-non-zts-20160303
RUN echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/20-mongodb.ini

RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/api

EXPOSE 9000:9000

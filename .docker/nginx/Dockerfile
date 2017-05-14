FROM nginx

MAINTAINER Haydar KÜLEKCİ

RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Istanbul /etc/localtime

COPY nginx.conf /etc/nginx/nginx.conf
WORKDIR /var/www/api

EXPOSE 80:8080
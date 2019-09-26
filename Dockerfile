FROM php:7.2-apache

ENV APACHE_DOCUMENT_ROOT /app/public/

MAINTAINER j@cobford.com

COPY / /app/public/

EXPOSE 80

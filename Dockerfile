FROM php:7.2-apache
MAINTAINER j@cobford.com

RUN mkdir -p /app/public/
ENV APACHE_DOCUMENT_ROOT /app/public/
COPY / /app/public/

EXPOSE 80

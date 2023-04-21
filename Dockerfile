FROM php:7.4-apache

COPY ./app/ /var/www/html/
COPY ./apache/.htaccess /var/www/html

COPY ./apache/custom_config.conf /etc/apache2/conf-available/custom_config.conf

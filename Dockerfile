FROM php:7.2-apache

MAINTAINER ruipvieira <ruipvieira156@gmail.com>

RUN chown -R www-data:www-data / \ && a2enmod rewrite

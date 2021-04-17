FROM php:7.4-apache

# install Composer
# https://docs.docker.com/develop/develop-images/multistage-build/#use-an-external-image-as-a-stage
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update \
  && apt-get install zip unzip

WORKDIR /var/www
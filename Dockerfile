FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    curl 

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html/

COPY --chown=www-data:www-data . .

EXPOSE 80

HEALTHCHECK --interval=5s --timeout=3s \
   CMD curl -f https://localhost:80 || exit 1

CMD ["apache2-foreground"]

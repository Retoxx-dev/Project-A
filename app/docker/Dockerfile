FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    curl 

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN docker-php-ext-install mysqli

RUN mkdir /var/cred

WORKDIR /var/cred

COPY --chown=www-data:www-data ../creds/cred.php .

WORKDIR /var/www/html/

COPY --chown=www-data:www-data ../app_files/ .

##To be optimalized 
RUN mkdir /var/www/html/css
WORKDIR /var/www/html/css
COPY --chown=www-data:www-data ../css .
##

EXPOSE 80

CMD ["apache2-foreground"]

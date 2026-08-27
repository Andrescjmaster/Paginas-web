FROM php:8.2-apache

# Instalar la extensión mysqli para PHP
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiar los archivos del proyecto
COPY . /var/www/html/

# Dar permisos de lectura y ejecución a Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

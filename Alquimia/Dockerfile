FROM php:8.2-apache

# Actualizar e instalar dependencias de base de datos de forma segura
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql mysqli pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Copiar archivos del proyecto al directorio web
COPY . /var/www/html/

# Dar permisos adecuados de lectura y ejecución a Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

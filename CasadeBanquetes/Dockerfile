FROM php:8.2-apache

# Actualizar e instalar dependencias de base de datos de forma segura
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql mysqli pdo_mysql

# Copiar archivos
COPY . /var/www/html/

# Configurar el puerto de Render
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

EXPOSE 80

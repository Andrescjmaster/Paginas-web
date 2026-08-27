FROM php:8.2-apache

# Actualizar e instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql mysqli pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Cambiar la raíz de Apache a /var/www/html/templates
ENV APACHE_DOCUMENT_ROOT /var/www/html/templates
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Indicar a Apache que acepte Home.php como página principal
RUN echo "DirectoryIndex Home.php index.php" >> /etc/apache2/apache2.conf

# Copiar todos los archivos
COPY . /var/www/html/

# Crear enlace simbólico para que templates encuentre la carpeta static
RUN ln -s /var/www/html/static /var/www/html/templates/static

# Dar permisos adecuados
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

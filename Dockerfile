FROM php:8.2-apache

# Lavalust needs clean URLs, which means mod_rewrite + AllowOverride
RUN a2enmod rewrite

# Extensions Lavalust/MySQL typically need
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files into Apache's web root
COPY . /var/www/html/

# Fix permissions so Apache can read/write as needed
RUN chown -R www-data:www-data /var/www/html

# Let .htaccess files actually take effect
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

EXPOSE 80
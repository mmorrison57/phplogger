# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy your PHP files to the Apache server's web root
COPY index.php /var/www/html/

# Expose port 80
EXPOSE 80

# Healthcheck (optional)
HEALTHCHECK CMD curl --fail http://localhost/ || exit 1

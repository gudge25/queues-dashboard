# Use PHP 7.4 with Apache as the base image
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy PHP files into the container
# COPY . /var/www/html

# Expose port 80 (default for HTTP)
EXPOSE 80

# You might need to install additional dependencies or configure PHP here if necessary

# The web server will start automatically with the base image

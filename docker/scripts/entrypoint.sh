#!/bin/bash

# Create Laravel storage link
php artisan storage:link

# Set proper permissions
chown -R www-data:www-data /var/www
chmod -R 775 /var/www/storage /var/www/bootstrap/cache /var/www/public

# Start Apache
apache2-foreground

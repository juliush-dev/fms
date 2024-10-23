#!/bin/bash
wp config create --allow-root --dbname=wordpress_db --dbuser=user --dbpass=password --dbhost=db
wp core install --allow-root --url=localhost --title=Dev --admin_user=Admin --admin_password=password --admin_email=info@example.com
# Start php-fpm
echo "Starting php-fpm..."
exec php-fpm
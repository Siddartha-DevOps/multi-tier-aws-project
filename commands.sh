#!/bin/bash

# Update system
sudo apt update && sudo apt upgrade -y

# Install Nginx
sudo apt install nginx -y

# Install PHP and extensions
sudo apt install php-fpm php-mysql -y

# Configure Nginx to use PHP
sudo nano /etc/nginx/sites-available/default

# Restart Nginx
sudo systemctl restart nginx

# Test PHP
echo "<?php phpinfo(); ?>" | sudo tee /var/www/html/info.php

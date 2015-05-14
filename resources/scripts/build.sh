#!/bin/bash
apt-get update
apt-get install php5-curl -y
apt-get install php5-gd -y
chgrp -R www-data hatches-api/
cd /var/www/hatches-api/
composer self-update
mv /var/hatches.prod.env /var/www/hatches-api/.env
composer install --prefer-source --no-dev --no-progress
chmod -R 0777 /var/www/hatches-api/storage
php artisan key:generate
php artisan flyfish
php artisan vendor:publish
php artisan migrate  --force #will be removed in realsies production env

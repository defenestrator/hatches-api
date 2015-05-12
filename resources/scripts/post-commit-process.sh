#!/bin/bash
apt-get update
apt-get install php5-curl -y
apt-get install php5-gd -y
touch hatches-api/storage/database.sqlite
chgrp -R www-data hatches-api/
cd /var/www/hatches-api/
chmod -R 0777 /var/www/hatches-api/storage
composer self-update
composer install --prefer-source --no-dev --no-progress
rm /etc/nginx/sites-enabled/default
cp server.conf /etc/nginx/sites-enabled/default
service nginx restart
mv .env.blank .env
php artisan key:generate
php artisan migrate --seed --force #will be removed in realsies production env
php artisan vendor:publish

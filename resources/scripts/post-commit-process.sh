#!/bin/bash
apt-get update
apt-get install php5-curl -y
apt-get install php5-gd -y
touch hatches-api/storage/database.sqlite
chgrp -R www-data hatches-api/
cd /var/www/hatches-api/
composer self-update
composer install --prefer-source --no-dev
rm /etc/nginx/sites-available/default
cp nginx.default /etc/nginx/sites-available/default && cp nginx.conf /etc/nginx/nginx.conf
service nginx restart;
mv .env.blank .env
chmod -R 0777 /var/www/hatches-api/storage
php artisan key:generate
php artisan flyfish
php artisan migrate --seed --force #will be removed in realsies production env
php artisan vendor:publish

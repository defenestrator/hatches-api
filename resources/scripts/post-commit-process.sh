#!/bin/bash
apt-get update
apt-get install php5-curl -y
apt-get install php5-gd -y
touch hatches-api/storage/database.sqlite
chgrp -R www-data hatches-api/
cd /var/www/hatches-api/
composer self-update
composer install --prefer-source --no-dev
chgrp -R www-data /var/www/hatches-api/
rm /etc/nginx/sites-enabled/default
cp nginx.default /etc/nginx/sites-available/default
service nginx restart;
mv .env.blank .env
chmod -R 0775 /var/www/hatches-api/storage && chmod 0777 storage/database.sqlite
php artisan key:generate
php artisan flyfish
php artisan migrate --seed --force #will be removed in realsies production env
php artisan vendor:publish

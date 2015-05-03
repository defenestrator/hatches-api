#!/bin/bash
cd /var/www/hatches-api/
# probably not needed
#npm install -g n
#npm n stable
apt-get update
apt-get install php5-curl -y
apt-get install php5-gd -y
composer self-update
composer install --prefer-source --no-dev
chgrp -R www-data /var/www/hatches-api/hatches-api/
rm /etc/nginx/sites-enabled/default
cp nginx.default /etc/nginx/sites-available/default
service nginx restart;
mv .env.blank .env
touch storage/database.sqlite
chmod -R 0775 /var/www/hatches-api/storage && chmod 0777 storage/database.sqlite
php artisan key:generate
php artisan flyfish
php artisan migrate --seed --force #will be removed in realsies production env
php artisan vendor:publish

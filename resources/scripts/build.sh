#!/bin/bash
sudo -i
cd /var/www
rm -rf hatches-api/
apt-get update
apt-get install php5-curl -y
apt-get install php5-gd -y
apt-get install php5-mysql
git clone https://github.com/defenestrator/hatches-api.git
mv hatches.prod.env hatches-api/.env
chgrp -R www-data hatches-api/
cd hatches-api/
chmod -R 0777 storage/
composer self-update
composer install --prefer-source --no-dev --no-progress
php artisan key:generate
php artisan flyfish
php artisan vendor:publish
php artisan migrate  --force
exit

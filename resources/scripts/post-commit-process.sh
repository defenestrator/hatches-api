#!/bin/bash
cd /var/www/hatches-api/
# probably not needed
#npm install -g n
#npm n stable
apt-get update
apt-get install php5-curl
apt-get install php5-gd
composer self-update
composer install --prefer-source
npm install
chgrp -R www-data /var/www/hatches-api/
# I think our fresh server image probably has this config, but we need to update it from the confluence doc date:05/03/2015.
rm /etc/nginx/sites-available/default;
mv nginx.default /etc/nginx/sites-available/default;
service nginx restart;
mv .env.behat.travis .env.behat && mv .env.blank .env
touch /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite
chmod -R 0775 /var/www/hatches-api/storage && chmod 0777 /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite
npm install -g gulp
php artisan key:generate
php artisan flyfish
php artisan migrate --seed --force #will be remved in realsies production env
php artisan vendor:publish
./vendor/bin/behat --init
gulp test
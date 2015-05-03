#!/bin/bash
sudo -i
cd /var/www/hatches-api/
composer install --prefer-source
php artisan key:generate
php artisan migrate --seed --force
php artisan vendor:publish
sudo rm /etc/nginx/sites-available/default
mv nginx.default /etc/nginx/sites-available/default
sudo service nginx restart
touch /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite
chgrp -R www-data /var/www/hatches-api
chmod -R 0777 /var/www/hatches-api/storage
mv .env.example .env && mv .env.behat.travis .env.behat
npm install
vendor/bin/behat --init
gulp test
exit
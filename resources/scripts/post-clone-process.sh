#!/bin/bash

composer install --prefer-source;
npm instal;
php artisan key:generate;
php artisan migrate --seed --force;
php artisan vendor:publish;
rm /etc/nginx/sites-available/default;
mv nginx.default /etc/nginx/sites-available/default;
service nginx restart;
touch /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite;
chgrp -R www-data /var/www/hatches-api;
chmod -R 0777 /var/www/hatches-api/storage;
mv .env.example .env && mv .env.behat.travis .env.behat;
vendor/bin/behat --init;
gulp test;

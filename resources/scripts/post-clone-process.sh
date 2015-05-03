#! /bin/bash
mv .env.example .env && mv .env.behat.travis .env.behat;
php artisan key:generate;
php artisan vendor:publish;
rm /etc/nginx/sites-available/default;
mv nginx.default /etc/nginx/sites-available/default;
service nginx restart;
touch /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite;
chgrp -R www-data /var/www/hatches-api;
chmod -R 0777 /var/www/hatches-api/storage;
php artisan migrate --seed --force;
vendor/bin/behat --init;
gulp test;

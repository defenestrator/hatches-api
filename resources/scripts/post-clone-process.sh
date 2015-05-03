#!/bin/bash
touch /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite
chmod -R 0775 /var/www/hatches-api/storage && chmod 0777 /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite
npm install -g gulp
php artisan flyfish
php artisan key:generate
chgrp -R www-data /var/www/hatches-api;
chmod -R 0777 /var/www/hatches-api/storage;
php artisan migrate --seed
php artisan vendor:publish
behat --init
gulp test
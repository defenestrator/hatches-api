#!/bin/bash

sudo -i
npm install -g n
npm n stable
cd /var/www
git clone https://github.com/defenestrator/hatches-api.git
cd hatches-api/
composer self-update
composer install --prefer-source
npm install
touch /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite
chmod -R 0775 /var/www/hatches-api/storage && chmod 0777 /var/www/hatches-api/storage/database.sqlite /var/www/hatches-api/storage/acceptance/acceptance.sqlite
npm install -g gulp
php artisan flyfish
php artisan key:generate
php artisan migrate --seed
php artisan vendor:publish
behat --init
gulp test
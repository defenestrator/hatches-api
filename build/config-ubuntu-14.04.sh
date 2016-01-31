#!/usr/bin/env bash
# To configure *ubuntu 14.04, and variations thereupon do the following:
# chmod +x config-ubuntu-14.04.sh
# Run it from var/build, not from inside the project.
# Just wanted to get this in the repo so I don't lose track.
# Soemthing like this should work:
# sudo /var/build/config-ubuntu-14.04.sh
APP_NAME=hatches-api
# First we update and clean up a bit,
apt-get update && apt-get upgrade && apt-get autoclean
# Install this so apt-get-repository doesn't throw a fit
apt-get install -y python-software-properties
# Add the php 5.6 package repo
# This step may require manual interaction, @TODO automate this.
add-apt-repository ppa:ondrej/php5-5.6
# update so apt-get knows about the repo we just added
apt-get update
# ALL THE THINGS
apt-get install -y git ssh vim php5 sqlite3 php5-sqlite php5-fpm nginx
# because Nano eats balls
export EDITOR=vim
# probably should run check_service.sh instead
./check_service.sh apache remove
cd /var/www
if [ -a hatches-api ]
    then
        rm -rf hatches-api/
        echo "removing old hatches-api/ directory"
    else
        echo "cloning repository"
fi
git clone https://github.com/defenestrator/hatches-api.git
if [-a ./hatches.prod.env]
    then
        echo "There is no production .env file, you better double check that"
    else
        mv ./hatches.prod.env hatches-api/.env
        echo "Applying production environment variables configuration"
fi
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
curl -sL https://deb.nodesource.com/setup_5.x | bash -
apt-get install -y nodejs build-essential
git clone https://github.com/defenestrator/hatches-api.git /var/www/hatches-api
adduser --system --no-create-home --disabled-login --disabled-password --group nginx
usermod -g www-data nginx
chown -R www-data:nginx hatches-api/
chgrp -R www-data hatches-api/
cd hatches-api/
chmod -R 0777 storage/ bootstrap/cache
composer self-update
composer install --prefer-source --no-dev &&
php artisan key:generate &&
php artisan vendor:publish &&
php artisan migrate  --force
chmod 440 ./.env
service php5-fpm restart
service nginx restart
exit

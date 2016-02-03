#!/usr/bin/env bash
# To configure Laravel ~5.1 on *ubuntu 14.04, and variations thereupon
# Make this piece executable: chmod +x config-ubuntu-14.04.sh
# Run it from var/build, not from inside the project.
# That which follows should work, do use sudo:
# sudo /var/build/config-ubuntu-14.04.sh
# Set the directory name of the app,
# if it matches your github repo
# name; that would be great.
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
# To the refuse bin with apache2 because I'm an hipster.
./check_service.sh remove apache2
# If deploying to the same box, just do a sanity check and remove the old deployment,
# ugly, but not as ugly as half-a-patch deployment.
cd /var/www
if [ -a ${APP_NAME} ]
    then
        rm -rf ${APP_NAME}/
        echo "removing old hatches-api/ directory then cloning ${APP_NAME} repository"
        exit 1
    else
        echo "cloning ${APP_NAME} repository"
fi
git clone https://github.com/defenestrator/${APP_NAME}.git
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
git clone https://github.com/defenestrator/hatches-api.git /var/www/${APP_NAME}
adduser --system --no-create-home --disabled-login --disabled-password --group nginx
usermod -g www-data nginx
chown -R www-data:nginx ${APP_NAME}/
chgrp -R www-data ${APP_NAME}/
cd ${APP_NAME}/
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

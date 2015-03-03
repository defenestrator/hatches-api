# Hatch.es API

[![Build Status](https://travis-ci.org/defenestrator/hatches-api.svg?branch=master)](https://travis-ci.org/defenestrator/hatches-api)
[![Coverage Status](https://coveralls.io/repos/defenestrator/hatches-api/badge.svg)](https://coveralls.io/r/defenestrator/hatches-api)

## Mobile Fly Fishing Tools

 Track your angling success on-stream with offline fisheries maps and
automatically correlate GPS information with weather, hydrology, hatch activity, and other custom data that you collect
_**without interrupting your cast.**_

Shoot a video of your buddy catching a fish deep in the backwoods and we can have it posted to your fly fishing journal
before you get home. Keep it a secret forever, show it to that buddy of yours, or share it with the world. **It is up to you.**

### _The_ premium app for hardcore fly anglers

### Cultivate fly fishing knowledge using real data.

There is a lot of mythology in the sport of fly fishing, and much of it is accepted as sanctified wisdom, but there is precious little
empirical data available We are building a data collection and reporting service for fly fishers who want facts, not fables. Take
control of your fly fishing, and catch more fish!

## Learn the terrain.

Automatically log geospatial information **while fishing.** When you land a fish, take a picture and it will be
tagged with your geolocation so you can track what really works on the water. Plan your fishing trip using informative mobile
maps and plot your activities on the map as you fish. You will then be able to review and analyze all of your journal's
information to help you catch more fish.

### Keep it secret, or pay it forward; The choice is yours.

You can keep your favorite spots private to protect sensitive fisheries, you can share some reports with your friends, and you
can post public data
if you like. Your privacy is important, and the conservation of our most pristine waters is perhaps more so. We don't, and never
will share your posts or personal information with any third party without your explicit permission, we don't roll like that.

### You don't have to be experienced, just enthusiastic.

We want to help the aspiring fly angler who doesn't know a coachman from a humpy to pick the right fly, and the jaded veteran
trout bum to dig even deeper with flexible reporting tools to find new answers to old questions. Maybe our public data
API service will benefit science someday. **Did I mention it's free?** The data API is free for everyone, the mobile apps will cost an
undetermined pittance to keep us from living _in a van down by the river._ Come to think of it, that doesn't sound too bad.

## Installation:
I'm assuming you have a github account.

Given that, it is safe to assume you know more or less how to configure your local development environment and have php 
v5.4 or greater installed, and the `mcrypt` extension. If you're on a Mac, use [Homebrew](http://brew.sh/), 
it makes this stuff easy! If not; *Step 0: Go buy a Mac* 
Perhaps you've even installed Composer:
- `curl -sS https://getcomposer.org/installer | php`
- `mv composer.phar /usr/local/bin/composer`
- *make sure you have* `/usr/local/bin` added to $PATH so you can just type `composer` in terminal and get some output.
- **I strongly recommend using [Laravel Homestead](http://laravel.com/docs/5.0/homestead) for your local environment.**

- install NodeJS.
- clone/fork this repository
- `cd hatches-api`
- ` mv .env.example .env`
- `composer install`
- `php artisan key:generate`
- `chmod -R 666 storage`
- `php artisan flyfish` - because, easter egg.
- `npm install -g n`
- `n stable`
- `npm install`
- `touch storage/database.sqlite`
- `php artisan migrate --seed`
- `php artisan vendor:publish`
- `gulp`

#### Homestead
Assuming you followed the instructions for configuring Homestead...
- `homestead ssh`
- assuming default homestead mapping: `cd ~/Code/hatches-api` or corresponding directory to your mapping.
- `php artisan migrate --seed`
Assuming default `homestead.app` has been added to HOSTS and configured in Homestead.yml, 
then you can just visit `http://homestead.app` in your local machine's browser.
 - check `homestead.app/docs` for API documentation, thanks!
 - Cheers, suckas!







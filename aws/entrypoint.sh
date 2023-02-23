#!/bin/sh
composer install --no-scripts --no-suggest --no-interaction --prefer-dist --optimize-autoloader

composer dump-autoload --optimize --classmap-authoritative

php artisan migrate --force

php artisan optimize

# envsubst < .env.template > .env

php-fpm --force-stderr --nodaemonize

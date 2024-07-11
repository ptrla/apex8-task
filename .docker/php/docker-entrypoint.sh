#!/bin/sh

composer install

bin/console doctrine:migrations:migrate --no-interaction

exec php-fpm
#!/bin/sh

composer install

while ! curl -o - symfony_dockerized_db_1:3306; do sleep 1; done

echo "The db is now ready and reachable"

bin/console doctrine:migrations:migrate --no-interaction

exec php-fpm
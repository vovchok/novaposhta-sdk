#!/bin/bash
set -e

curl -SL https://phar.phpunit.de/phpunit-5.7.phar -o phpunit.phar
chmod +x phpunit.phar
mv phpunit.phar /usr/local/bin/phpunit

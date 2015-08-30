#!/bin/bash
echo "" > start.log
php artisan serve --port 8010 --host 0.0.0.0 > start.log 2>start.log &
rm start.log

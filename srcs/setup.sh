#!/bin/bash

service nginx start
service php7.3-fpm start 
service mysql start

mysql < user.sql 

cp ./default-off /etc/nginx/sites-available/default

service nginx restart
FROM debian:buster

RUN apt-get upgrade \
	&& apt-get update \
	&& apt-get install -y \
	nginx \
	wget \
	default-mysql-server \
	default-mysql-client \
	php7.3-fpm \
	php7.3-common \
	php7.3-mysql \
	php7.3-gmp \
	php7.3-curl \
	php7.3-intl \
	php7.3-mbstring \
	php7.3-xmlrpc \
	php7.3-gd \
	php7.3-xml \
	php7.3-cli \
	php7.3-zip \
	php7.3-soap \
	php7.3-imap \
	vim 

#https
COPY srcs/dhparam.pem /etc/nginx
COPY srcs/nginx-selfsigned.crt /etc/ssl/certs
COPY srcs/nginx-selfsigned.key /etc/ssl/private
COPY srcs/self-signed.conf /etc/nginx/snippets
COPY srcs/ssl-params.conf /etc/nginx/snippets
COPY srcs/default /etc/nginx/sites-available

#php
COPY srcs/phpinfo.php /var/www/html

#phpmyadmin
RUN mkdir /var/www/html/phpmyadmin
COPY srcs/phpmyadmin /var/www/html/phpmyadmin

 #cree et copie le dossier worpress 
RUN mkdir /var/www/html/wordpress
COPY srcs/wordpress /var/www/html/wordpress

#user mysql
COPY srcs/user.sql .

COPY srcs/setup.sh .

EXPOSE 443 80 3306

CMD ["/bin/sh", "setup.sh"]

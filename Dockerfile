FROM debian:buster

RUN apt-get upgrade \
	&& apt-get update \
	&& apt-get install -y \
	nginx \
	wget \
	default-mysql-server \
	default-mysql-client \
	php \
	php-fpm \
	php-gd \
	php-mysql \
	php-cli \
	php-curl \
	php-common \
	php-mbstring \
	vim

COPY srcs/dhparam.pem /etc/nginx
COPY srcs/nginx-selfsigned.crt /etc/ssl/certs
COPY srcs/nginx-selfsigned.key /etc/ssl/private
COPY srcs/self-signed.conf /etc/nginx/snippets
COPY srcs/ssl-params.conf /etc/nginx/snippets
COPY srcs/default /etc/nginx/sites-available

EXPOSE 443 80
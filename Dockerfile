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

ADD sources/default etc/nginx/sites-available/default
	&& 


EXPOSE 80 443

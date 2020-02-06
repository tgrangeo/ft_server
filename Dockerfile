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

ADD sources/default etc/nginx/sites-available \
	&& sources/nginx-selfsigned.crt etc/ssl/certs \
	&& sources/nginx-selfsigned.key etc/ssl/private \
	&& sources/self-signed.conf etc/nginx/snippets \
	&& sources/ssl-params.conf etc/nginx/snippets


EXPOSE 80 443

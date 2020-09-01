FROM debian:buster

MAINTAINER fjewfish <metenoeducation@yandex.ru>

LABEL Description="web server with services: Wordpress, phpMyAdmin, and a SQL database" Version="1.0"

RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install vim
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server
RUN apt-get -y nstall php-{fpm,mysql,mbstring,zip,gd,xml,pear,gettext,cgi}
RUN apt-get -y nstall openssl

WORKDIR /var/www/fjewfish_server

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpMyAdmin.tar.gz
RUN tar xvzf phpMyAdmin.tar.gz
ADD https://wordpress.org/latest.tar.gz wordpress.tar.gz
RUN tar xvzf wordpress.tar.gz

COPY ./srcs/wp-config.php .
COPY ./srcs/phpmyadmin.inc.php .
COPY ./srcs/fjewfish_site.sh .
COPY ./srcs/info.php .
COPY ./srcs/maria_config.sql .
COPY ./srcs/nginx_on.conf .
COPY ./srcs/nginx_off.conf .

ENV INDEX 1

EXPOSE 80 443

ENTRYPOINT bash fjewfish_site.sh

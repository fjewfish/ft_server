FROM debian:buster

MAINTAINER fjewfish <metenoeducation@yandex.ru>

LABEL Description="web server with services: Wordpress, phpMyAdmin, and a SQL database" Version="1.0"

RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install vim
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server
RUN apt-get -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap

WORKDIR /var/www/fjewfish_server

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpMyAdmin.tar.gz
RUN tar xvzf phpMyAdmin.tar.gz
RUN rm -rf phpMyAdmin.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages phpmyadmin
ADD https://wordpress.org/latest.tar.gz wordpress.tar.gz
RUN tar xvzf wordpress.tar.gz
RUN rm -rf xvzf wordpress.tar.gz

COPY ./srcs/wp-config.php .
COPY ./srcs/phpmyadmin.inc.php .
COPY ./srcs/fjewfish_site.sh .
COPY ./srcs/info.php .
COPY ./srcs/maria_config.sql .
COPY ./srcs/nginx-conf_on .
COPY ./srcs/nginx-conf_off .
COPY ./srcs/change_index.sh .

ENV IND 1

EXPOSE 80 443

CMD bash fjewfish_site.sh

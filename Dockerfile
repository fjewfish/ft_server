FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade 
RUN apt-get -y install vim \
    nginx default-mysql-server php7.3 php7.3-fpm \
    wordpress php7.3-mysql php-json php-nbstring \
    openssl

COPY ./srcs/start_services.sh ./srcs/init_database.sql /
COPY ./srcs/default /etc/nginx/sites-available
COPY ./srcs/ssl-params.conf ./srcs/self-signed.conf /etc/nginx/snippets/

COPY ./srcs/fjewfish.crt ./srcs/dhparam.pem /etc/ssl/certs/
COPY ./stcs/fjewfish.key /etc/ssl/private/fjewfish.key
COPY ./srcs/autoindex.sh /

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz p_adm.tar.gz

RUN tar xvzf p_adm.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin
RUN mb /usr/share/wordpress /var/www/html

COPY ./srcs/wp-congig/php /var/www/html/wordpress
COPY ./strs/congig.inc.php /var/www/html/phpmyadmin/

RUN chown -R www-data /var/www/html

EXPOSE 80 443

RUN service mysql start && mysql < init_database.sql

ENTRYPOINT bash start_services.sh


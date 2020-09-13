# Config Rights
chown -R www-data /var/www/*
chmod -R 755 /var/www/*

#SSL
mkdir /etc/nginx/ssl
openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/key_fjewfish.pem -keyout /etc/nginx/ssl/key_fjewfish.key -subj "/C=RU/ST=Moscow/L=Moscow/O=42 School/OU=fjewfish/CN=localhost"

#NGINX
mkdir /etc/nginx/sites-available/fjewfish
mv nginx-conf_on /etc/nginx/sites-available/fjewfish
mv nginx-conf_off /etc/nginx/sites-available/fjewfish
if [ "$IND" = 1 ]
then
ln -s /etc/nginx/sites-available/fjewfish/nginx-conf_on /etc/nginx/sites-enabled
rm -rf /etc/nginx/sites-enabled/default
echo -e "\033[30m\033[41mINDEX_ON MODE\033[0m"
elif [ "$IND" = 0 ]
then
ln -s /etc/nginx/sites-available/jewfish/nginx-conf_off /etc/nginx/sites-enabled/jewfish
rm -rf /etc/nginx/sites-enabled/default
echo -e "\033[30m\033[41mINDEX_OFF MODE\033[0m"
fi

#PHP
mv phpmyadmin.inc.php phpmyadmin/config.inc.php

#MySQL
service mysql start
service nginx start
service php7.3-fpm start
mysql -u root < maria_config.sql

#nginx -q -s stop;
#nginx -g 'daemon off;'
bash

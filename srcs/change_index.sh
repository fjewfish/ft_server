cd /etc/nginx/sites-enabled
OUTPUT=$(ls)
ON="nginx-conf_on"
OFF="nginx-conf_off"
echo -e "\033[31mcurrent NGINX configuration: $OUTPUT\033[0m"
if [[ "$OUTPUT" = "$ON" ]]; then
rm -rf nginx-conf_on
ln -s /etc/nginx/sites-available/fjewfish/nginx-conf_off /etc/nginx/sites-enabled
echo -e "\033[30m\033[41mINDEX_OFF MODE\033[0m"
elif [[ "$OUTPUT" = "$OFF" ]]; then
rm -rf nginx-conf_off
ln -s /etc/nginx/sites-available/fjewfish/nginx-conf_on /etc/nginx/sites-enabled
echo -e "\033[30m\033[41mINDEX_ON MODE\033[0m"
fi
service nginx restart

exit 0

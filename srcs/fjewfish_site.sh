#SSL
mkdir /etc/nginx/ssl
openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/monsupersite.pem -keyout /etc/nginx/ssl/monsupersite.key -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=rchallie/CN=monsupersite"


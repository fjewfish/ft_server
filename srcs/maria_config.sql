CREATE DATABASE wordpress;
CREATE USER 'fjewfish' @ 'localhost' IDENTIFIED BY 'strong_pswd';
GRANT ALL ON wordpress.* TO 'fjewfish' @ 'localhost' IDENTIFIED BY 'strong_pswd' WITH GRANT OPTION;
FLUSHP PRIVILEGES;

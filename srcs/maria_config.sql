CREATE DATABASE wordpress;
CREATE USER 'fjewfish'@'localhost';
GRANT ALL ON wordpress.* TO 'fjewfish'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

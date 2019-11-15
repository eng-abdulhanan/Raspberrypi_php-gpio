# Raspberrypi_php-gpio
PHP script to read Real-Time data from Raspberry Pi and show it on Apache Web server.

## 1.Install Apache
Update Raspberry Pi first  by **sudo apt update**

Once Raspberry Pi is updated. Install Apache server
```
sudo apt install apache2
sudo chown -R pi:www-data /var/www/html/
sudo chmod -R 770 /var/www/html/
```
### Check if Apache is working
```
wget -O check_apache.html http://127.0.0.1
```

## 2. Install PHP
```
sudo apt install php php-mbstring
sudo rm /var/www/html/index.html
echo "<?php phpinfo ();?>" > /var/www/html/index.php
```

## 3. Install MySql Server 
```
sudo apt install mariadb-server php-mysql
sudo mysql --user=root
DROP USER 'root'@'localhost';
CREATE USER 'root'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
```
now you can run my sql using ```mysql --user=root --password=password```

## 4. Add PHPMyAdmin
```
sudo apt install phpmyadmin
sudo phpenmod mysqli
sudo /etc/init.d/apache2 restart
```
## 5. Create gpio_read.php and index.php
Download files and copy them to /var/www/html.|
then Open browser  and write local Ip address to see Apache server


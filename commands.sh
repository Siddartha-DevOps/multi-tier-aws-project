#!/bin/bash

# Update system
sudo apt update && sudo apt upgrade -y

# Install Apache2
sudo apt install Apache2

# create a file name index.php
sudo nano index.php

# create a root web directory to store the site
cd /var/www/html

# Install PHP Dependencies & Extensions
sudo apt install php8.3

# install my sql server && client  
sudo apt install mysql-server
sudo apt install mysql-client

sudo apt install  php8.3-mysqli

# add the repository of php code
sudo add-apt-repositoty -y ppa:ondrej/php

# check status & Restart the Apache2 server
sudo systemctl restart Apache2
sudo systemctl status Apache2

# connect EC2 instance with mysql database with RDS Endpoint

mysql -h <end-point> -u  <username> -p<password>

#  In sql server run these commands

show databases; # this  shows available databases on server

# select your database, eg: intel

USE intel;

show tables; # this shows tables available in database


# if data or table aren't available 

# this will create a table  name "data" 
#  create a table with name
Create table data(firstname varchar(50), gmail varchar(50));

# to show the data inside tables
select * from data

## ... thats  end of commands... ##

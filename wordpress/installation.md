# Install wordpress on local apache server (Linux)
## Needed: Apache server, mariadb or mysql
### To set user password
`SET PASSWORD FOR 'username'@'localhost' = PASSWORD('password');`

------------------------------------------------
## 1.
### Download wordpress<br>
`https://wordpress.org/download/`
### Extract files into apache
`/var/www/html/wordpress` (or folder of choice)

------------------------------------------------
## 2.
### Create user
##### 2.1 Start db-admin
##### 2.2 Create user
##### 2.3 Givet user privileges to access database
##### 2.4 Flush (reload) privileges
###### 2.1 
`sudo mysql -u root -p
###### 2.2 
`CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';`
###### 2.3 
`GRANT ALL PRIVILEGES ON * . * TO 'username'@'localhost';`
###### 2.4 
`FLUSH PRIVILEGES;`

------------------------------------------------
## 3.
### Check user list and see that created user exists
`SELECT User FROM mysql.user;`

------------------------------------------------
## 4.
### Create database
##### 4.1 Start db-admin
##### 4.2 Create database with utf-8
##### 4.3 Give specified user access to database
##### 4.4 Flush (reload) privileges

###### 4.1
`sudo mysql -u root -p`
###### 4.2
`CREATE DATABASE databasename DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;`
###### 4.3
`GRANT ALL ON databasename.* TO 'username'@'localhost' IDENTIFIED BY 'password';`
###### 4.4
`FLUSH PRIVILEGES;`

------------------------------------------------
## 5.
### Install wordpress on server
###### 5.1 Enter `localhost/wordpress` in browser window or ip of server, ie `192.168.1.10/wordpress`
###### 5.2 Enter databasename, password, username for DB-access and username for wp-admin login and LET'S GO!
###### 5.3 Wait for install
###### 5.4 FINISH!

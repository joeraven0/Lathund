Install wordpress on local apache server
To set user password<br><br>
SET PASSWORD FOR 'username'@'localhost' = PASSWORD('password');
------------------------------------------------
1.
###Download wordpress<br>
`https://wordpress.org/download/`<br>
Extract files into apache /var/www/html/wordpress (or folder of choice)<br>
------------------------------------------------
2.<br>
Create user<br>
2.1 Start db-admin<br>
2.2 Create user<br>
2.3 Givet user privileges to access database<br>
2.4 Flush (reload) privileges<br>
<br>
2.1 sudo mysql -u root -p<br>
2.2 CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';<br>
2.3 GRANT ALL PRIVILEGES ON * . * TO 'username'@'localhost';<br>
2.4 FLUSH PRIVILEGES;<br>
------------------------------------------------
3. <br>
Check user list and see that created user exists<br>
SELECT User FROM mysql.user;<br>
------------------------------------------------
4.<br>
Create database<br>
4.1 Start db-admin<br>
4.2 Create database with utf-8<br>
4.3 Give specified user access to database<br>
4.4 Flush (reload) privileges<br>
<br>
4.1 sudo mysql -u root -p<br>
4.2 CREATE DATABASE databasename DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;<br>
4.3 GRANT ALL ON databasename.* TO 'username'@'localhost' IDENTIFIED BY 'password';<br>
4.4 FLUSH PRIVILEGES;<br>
------------------------------------------------
5.<br>
Install wordpress on server<br>
5.1 Enter /localhost/wordpress in browser window or ip of server, ie 192.168.1.10/wordpress<br>
5.2 Enter databasename, password, username for DB-access and username for wp-admin login and LET'S GO!<br>
5.3 Wait for install<br>
5.4 FINISH!

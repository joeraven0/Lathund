# linux-reminders
### Folder persmission
```
chmod -R a+rwX .
sudo chown -R $USER:$USER /var/www/html
```
### Samba
- https://www.raspberrypi.org/magpi/samba-file-server/
```
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install samba samba-common-bin
sudo mkdir -m 1777 /share
sudo leafpad /etc/samba/smb.conf
```
###### Add folder specifications to smb.conf
```
[share]
Comment = Pi shared folder
Path = /share
Browseable = yes
Writeable = Yes
only guest = no
create mask = 0777
directory mask = 0777
Public = yes
Guest ok = yes
```
###### Set password for user pi (raspberry default)
`sudo smbpasswd -a pi`
###### Restart samba
`sudo /etc/init.d/samba restart`
#### If "nemo cannot"
```
sudo apt-get install gvfs-backends
sudo mkdir -m 1777 /share
```
### SASS
```
sudo apt-get install ruby-dev
sudo gem install sass
sass --watch main.sass:main.css
```
### Printer RPi
#### Drivers
```
sudo apt-get install cups
sudo usermod -a -G lpadmin pi
sudo leafpad /etc/cups/cupsd.conf
```
###### Look for section and change
```
# Only listen for connections from the local machine
# Listen localhost:631
Port 631
```
###### Add following lines
```
< Location / >
# Restrict access to the server...
Order allow,deny
Allow @local
< /Location >

< Location /admin >
# Restrict access to the admin pages...
Order allow,deny
Allow @local
< /Location >

< Location /admin/conf >
AuthType Default
Require user @SYSTEM

# Restrict access to the configuration files...
Order allow,deny
Allow @local
< /Location >
```
###### Restart
`
sudo /etc/init.d/cups restart
`
###### Access admin and add printer through
`http://localhost:631`
#### Scanner software
`sudo apt-get install simple-scan`

### Server
##### Allow .htaccess
`sudo leafpad /etc/apache2/apache2.conf`
`AllowOverride All`
`systemctl restart apache2`

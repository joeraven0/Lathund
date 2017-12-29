# linux-reminders
### Folder persmission
- "chmod -R a+rwX ." <br>
- "sudo chown -R $USER:$USER /var/www/html"<br>
### Samba
https://www.raspberrypi.org/magpi/samba-file-server/
### If "nemo cannot"
- sudo apt-get install gvfs-backends<br>
- sudo mkdir -m 1777 /share
### SASS
- sudo apt-get install ruby-dev
- sudo gem install sass
### Printer
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
#### Scanner
`sudo apt-get install simple-scan`

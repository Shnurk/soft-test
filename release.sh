# //->default apache comments
#/usr/git_test000 - local pull directory
rm -R /usr/git_test000
mkdir /usr/git_test000
cd /usr/git_test000
git init
git pull https://github.com/Shnurk/soft-test
#create webhook triggered file
cat <<EOT > ./plinor/gitpull.php
<?php
shell_exec('cd ..');
echo shell_exec('git pull https://github.com/Shnurk/soft-test2>&1');
?>
EOT

#changing index.php directory
cat <<EOT > /etc/apache2/sites-available/000-default.conf
<VirtualHost *:80> 
# //The ServerName directive sets the request scheme, hostname and port that 
# //the server uses to identify itself. This is used when creating 
# //redirection URLs. In the context of virtual hosts, the ServerName
# //specifies what hostname must appear in the request's Host: header to 
# //match this virtual host. For the default virtual host (this file) this 
# //value is not decisive as it is used as a last resort host regardless.
# //However, you must set it for any further virtual host explicitly.
#//ServerName www.example.com
 
ServerAdmin webmaster@localhost
DocumentRoot /usr/git_test000
#security from https://api.github.com/meta (webhook ip)
<Directory usr/git_test000/plinor/gitpull.php>
Require ip 192.30.252.0/22
Require ip 185.199.108.0/22
Require ip 140.82.112.0/20
</Directory> 
 
# //Available loglevels: trace8, ..., trace1, debug, info, notice, warn, 
# //error, crit, alert, emerg. 
# //It is also possible to configure the loglevel for particular 
# //modules, e.g.
#//LogLevel info ssl:warn
 
ErrorLog \${APACHE_LOG_DIR}/error.log 
CustomLog \${APACHE_LOG_DIR}/access.log combined
# //For most configuration files from conf-available/, which are 
# //enabled or disabled at a global level, it is possible to 
# //include a line for only one particular virtual host. For example the 
# //following line enables the CGI configuration for this host only
# //after it has been globally disabled with "a2disconf".
#//Include conf-available/serve-cgi-bin.conf 
</VirtualHost> 
 
# //vim: syntax=apache ts=4 sw=4 sts=4 sr noet
EOT
#granting permissions to access index.php from web
cat <<EOT >> /etc/apache2/apache2.conf
<Directory /usr/git_test000>
Options Indexes FollowSymLinks
AllowOverride All
Require all granted
</Directory>
EOT

#fixing MySql.php file-name
cp /usr/git_test000/plinor/bizz/core/MySQL.php /usr/git_test000/plinor/bizz/core/mysql.php

#read mysql root password
echo "Enter MySQL root password: "
read sql_pass
#import mysql dump
mysql --user=root --password="$sql_pass" --execute="DROP DATABASE IF EXISTS plinor;CREATE DATABASE plinor;use plinor;source /usr/git_test000/plinor/plinor.sql;"

#cahange model.php
cat <<EOT > /usr/git_test000/plinor/bizz/core/model.php
<?php
class Model
{

    var \$db=NULL;
    function __construct()
    {
        \$this->db = new MySQL("localhost", "root","$sql_pass","plinor");
        \$this->db->set_charset("utf8");
    }
}
EOT

#changing index.php directory owner
sudo chown -R www-data:www-data /usr/git_test000
#enable module rewrite
sudo a2enmod rewrite
sudo service apache2 restart


# Secure Software Application

This application has been developed using the coding languages HTML, CSS, PHP, 
along with Mysql for the database required.

It includes the following features:

Register and Login functionalities using input validation elements.
Automatically updated dates based on the last time users logged in.

# Installation Steps

Download and Install the Wamp Server Latest version (default settings) from the link below:
https://sourceforge.net/projects/wampserver/files/WampServer%203/WampServer%203.0.0/wampserver3.2.6_x64.exe/download

Download and Extract the ZIP file of the repository.

Rename the folder to "SecureApplication".

Place the folder inside this specific directory of the Wamp Server: C:\wamp64\www

Start the wampserver64 executable of the application you previously installed and wait 
until the taskbar icon is green, after that click on it and and hover over the PhpMyAdmin
option and open the latest version.

When you open it on your browser it will ask you to login, make sure Server Choice is set as
Mysql and login using the default username "root", password is not required.

# Database Creation

Now we are ready to create the required database for our application to work.

Click "New" on the left side and enter the database name "secure_app" and choose utf8_general_ci
as the collation and click on "Create".

Click on the "secure_app" database that we created and create a table with the name "users", type "4" as the number of columns
and click GO.

Click on the SQL tab, and insert the following code then click on "Go".

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8


Now we have our table ready to accommodate users.


# Starting the Application

To start our application we can do the following:

While the WampServer is open, type on your browser the following link:
http://localhost/SecureApplication/login.php

If the above option does not work, click on the WampServer taskbar icon,
Your Virtual Hosts, VirtualHost Management

When it opens, type the name of the VirtualHost as "SecureApplication" (same as the folder name inside the www/ directory).

Type the Path  of the virtualHost folder is "C:\wamp64\www\SecureApplication" and then click on "Start VirtualHost".

After that is complete you should be able to access the application using the following link:
http://secureapplication/login.php


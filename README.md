# FlamesCP
a lightweight mysql-free control panel for single minecraft servers

## Notes
Please move the authentication directory (security) to 
/var/www/security, if you would like to test this. o.php is the console output reader - do not remove it! 
The daemons are in the DAEMON directory - please start a screen for each and start them up seperately. 
Make sure you run the daemons as root!
Also, please note that your server should be running in the /SERVER directory of the system, and not in the web directory.

## Dependencies
This control panel requires: 
- PHP 5.3+ 
- CentOS 6.x 
- Apache (other webservers not currently supported - add support if you want) 
- PHP GD module 
- NetCat

## Installation
If you wish to install this control panel, here's the instructions.
Keep in mind that this panel *hasn't* even gotten close to passing into the alpha stage.
That being said, please report any bugs to me.

Run this to install:
wget -O - https://raw.githubusercontent.com/FlamesRunner/FlamesCP/c99700854a70630ad55df73e50c02c21a7973d1c/installers/install.sh | bash


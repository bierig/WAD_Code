CodeAnywhere does not have the XSL module per default. Open the SSH Terminal and execute the following commands to do that first.
After you ran these commands, XSL will be installed, configured and running as part of Apache. Then you can run this code, error free.

1. sudo apt-get update
2. sudo apt-get install php5-xsl
3. sudo php5enmod xsl
4. sudo service apache2 restart
5. sudo chown -R cabox:www-data  ~/workspace
6. sudo chmod 775 /home/cabox/workspace
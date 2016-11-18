Project LoupsitoFr
========================

Welcome to the website LoupsitoFr. This is a plateform where we can show our CV, our experience, etc.

1) Download the project
----------------------------------
### Zip
Download the project with zip

### Or

### Clone
Clone the project with : https://github.com/Loupsito/Loupsitofr.git

    git clone https://github.com/Loupsito/Loupsitofr.git
    
2) Update the dependencies
----------------------------------
Before use the project, it's necessary update the dependencies. To do it, use **composer**

### 1 - Download and install composer.phar

Go to the parent directory to your symfony project and execute this commande :

    php -r "eval('?>'.file_get_contents('http://getcomposer.org/installer'));"  
    
You can verifie your composer version with :

    php composer.phar --version
    
### 2 - Use composer to update the dependencies of the project

Go in the project, and use this commande to update the dependencies of the project with composer : 

    php ../composer.phar update

The update can take some minutes
    
3) Install CSS
----------------------------------
With symfony, the css need to be install before the use. (It is not mandatory but it is the practice advised by symfony)

    php app/console assets:install
    
4) Ready    
----------------------------------
The project is ready to use.
Go to : <a href="Loupsitofr/web/app_dev.php/">http://localhost/Loupsitofr/web/app_dev.php/</a>

For those who use the zip, if you dont change the name of the project, the path can be : 

<a href="Loupsitofr-origin/web/app_dev.php/">http://localhost/Loupsitofr-origin/Loupsitofr-origin/web/app_dev.php/</a>

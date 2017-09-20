### Installing

1- install the Vendor: go to the builder repo and tape the next command line on your terminal

```
composer install
```

2- install the Node modules : go to the builder repo and tape the next command line on your terminal

```
npm install
```

3- go to the repo web and open the .htaccess file in your code editor and change to following line with the path to your folder, example

```
RewriteBase /web/
```

4- enter your environments config in :

```
site/config/environments.php
```

## Running

1- first, run your localhost and go to your template folder

2- run gulp with the following line in the builder folder:

```
gulp
```

## use

#### home page
scroll down for the bio of the singer and see the menu too

### discography page
in this page i display all the current album of the singer

### album page
in this page i display all the song in the selected album

### single page
in this page i display the selected song

### admin
the login of the admin page are :
1. login : admin
2. password : password

# Map of repo

## builder

1. assets repo with sass and js for gulp
2. package.json : for gulp
3. composer.json : for silex
4. your nodes module and Vendor

# Silex

this template includes the php framework silex and gulp

### Prerequisites

You need Composer and Gulp on your computer, if you don't have it follow the next instruction.

1- For composer open your terminal everywhere and tape the next line one by one

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php composer-setup.php

sudo php -r "unlink('composer-setup.php');"

sudo mv composer.phar /usr/local/bin/composer
```

2- For Gulp download the last version of node JS
```
https://nodejs.org/en/
```
## License

This project is licensed under the MIT License - Alexis BENOLIEL 2017

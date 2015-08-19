## Laravel 5 App

RESTful API for Web/Mobile App

## Project Requirements

* PHP >= 5.4
* MCrypt PHP Extension, for Yosemite, see [here](http://coolestguidesontheplanet.com/install-mcrypt-php-mac-osx-10-10-yosemite-development-server/)
* Composer, for Mac, see [Installing Composer on OS X](http://www.abeautifulsite.net/installing-composer-on-os-x/). For Windows, see [Installation - Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)

## Project Installation & Setup

1. Clone the repository, for Mac, clone it to ```~/Sites/l5-app```. After that, switch to the ```develop``` branch.
2. Run the ```composer install``` command under the project root ```~/Sites/l5-app```. This command will download and install the framework's dependencies. Avoid using ```composer update``` command since it will update framework's dependencies to their latest version.

## Laravel Homestead

1. Install [VirtualBox](https://www.virtualbox.org/wiki/Downloads) and [Vagrant](http://www.vagrantup.com/downloads.html).
2. Add the box to your Vagrant, run ```vagrant box add laravel/homestead```. It will take a few minutes to download the box.
3. Install the Homestead CLI tool using the Composer, run ```composer global require "laravel/homestead=~2.0"```.
4. Add ```export PATH=~/.composer/vendor/bin:$PATH``` to your ```~/.bash_profile``` so the homestead executable is found when you run the homestead command in your terminal.
5. Run ```homestead init``` to create the ```Homestead.yaml``` configuration file, then run ```homestead edit``` to edit the yaml file. The yaml file should look like below for our project:
    ```
    ---
    ip: "192.168.10.10"
    memory: 2048
    cpus: 1

    authorize: ~/.ssh/id_rsa.pub

    keys:
        - ~/.ssh/id_rsa

    folders:
        - map: ~/Sites
          to: /home/vagrant/Sites

    sites:
        - map: l5-app.dev
          to: /home/vagrant/Sites/l5-app/public

    databases:
        - homestead
        - l5-app

    variables:
        - key: APP_ENV
          value: local
    ```
6. Make sure you have a SSH key, check by running ```ls -al ~/.ssh```. If not, generate a new one using ```ssh-keygen -t rsa -C "your_email@example.com"```.
7. Edit your ```hosts``` file to add the domain. Run ```sudo vim /etc/hosts```, add this line ```192.168.10.10   l5-app.dev``` to the file.
8. Start homestead by running ```homestead up```, after that, you should now see the welcome page by go to [http://l5-app.dev/](http://l5-app.dev/).

See more details about Laravel Homestead [here](http://laravel.com/docs/4.2/homestead).

## Database Setup

1. Use ```homestead ssh``` to ssh into the VM, go to the project root by running ```cd ~/Sites/l5-app```. Use ```php artisan migrate``` to run all migrations, then use ```php artisan db:seed``` to seed the tables.
2. You can use Sequel Pro to easily connect to the database. Download [Sequel Pro](http://www.sequelpro.com/).
3. Add a standard connection in Sequel Pro with the following details:
    ```
    Name: l5-app-local

    Host: 127.0.0.1

    Username: homestead

    Password: secret

    Database: l5-app

    Port: 33060
    ```

See more details about Migrations & Seeding [here](http://laravel.com/docs/4.2/migrations).

## Node.js

Although Laravel Homestead comes with Node.js, it doesn't work very well. We will install Node.js on our local machine.

1. Download and install Node [here](https://nodejs.org/download/).

### Bower

We will use Bower for our front-end package management.

1. Go to the project root by running ```cd ~/Sites/l5-app```, install Bower using ```sudo npm install -g bower```.
2. Run the ```bower install``` command under the project root. This command will download and install all package dependencies.

### Laravel Elixir

2. Go to the project root by running ```cd ~/Sites/l5-app```, pull in ```Gulp``` as a global NPM package, run ```sudo npm install --global gulp```.
3. Install Elixir by running ```sudo npm install```.
4. Now you can use ```Gulp``` commands to watch or compile SASS/LESS files, see the list of commands [here](http://laravel.com/docs/5.0/elixir#gulp).

See more details about Laravel Elixir [here](http://laravel.com/docs/5.0/elixir).

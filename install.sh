apt update
apt install -y git
apt install -y zip
apt install -y sqlite
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
mv composer.phar /usr/local/bin/composer
composer create-project --prefer-dist laravel/laravel:^7.0 /src/api
php -S 0.0.0.0:8020 -t /src/api/public

RUN docker-php-ext-install sockets

RUN composer install
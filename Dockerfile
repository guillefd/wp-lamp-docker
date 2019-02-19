FROM php:7.2.15-apache 
RUN docker-php-ext-install mysqli
RUN mkdir /docker-custom-backupdb
RUN a2enmod rewrite
RUN service apache2 restart
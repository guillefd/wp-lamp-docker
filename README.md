# PROJECT  
> Wordpress Local installation with Docker  
> Wordpress version 4.9.9 (it can be any, just update the files)

## LOCAL STAGE
Setup in Docker container

### INSTALL  
- install docker & docker-composer
- download this repository
- open terminal in folder
- run $ `docker-compose up -d`  
  *on Mac: use 'sudo' before command*  
  *on Windows: first start, open with administrative rights*   
  wait ...
- open browser at http:localhost:8000
- done!

_FIX: mod rewrite_  
in case mode rewrite not enabled:  
in terminal run:  
$ `docker exec -it wp-lamp-docker_www_1 bash`
$ `a2enmod rewrite`
$ `service apache2 restart`  
if container stops, start it again  
run $ `docker-compose up -d`  


### DAILY USE
open terminal in project folder, and type:

**1. start the service**  
$ `docker-compose up -d`

**2. stop the service**  
It´s highly recommended if your shutting down your computer, to stop the "service"  
$ `docker-compose stop`

**3. view on browser**  
Wordpress: open browser and go to http://localhost:8000  
PhpMyAdmin: open browser and go to http://localhost:8001 root/root

**4. Work on files**  
wordpress files are located in the ```/www``` folder.  
every change you make on this files, are replicated "instantly" on the server. (still you'll need to refresh the page each time to see them).   
database dump is located in ```/dump``` folder.

> Enjoy

## DEV SPECS

**WP**  
admin: wpadmin  
pass: 1234  
mail: me@mail.com 

**Shell**  
get shell access to container  

PHP/APACHE Container  
- get access to Linux on terminal
"Debian GNU/Linux 8 (jessie)"  
$ `docker exec -it wp-lamp-docker_www_1 bash`

MYSQL Container  
- get access to MySql on terminal
$ `docker exec -it wp-lamp-docker_db_1 bash`

**Database auto-backup**  
trigger mysqldump and save file to `/backupdb` folder.  
filename references datetime:  `mm-dd_hh-mm__`    

- generate .sql file (no gzip)  
$ `docker exec -it wp-lamp-docker_db_1 bash -l /docker-custom-backupdb/dump.sh`

    - *__Important:__ this file can be copied to `/dump` folder so it will be used from docker to initiate mysql database*

- generate .sql.gz (gzip)  
$ `docker exec -it wp-lamp-docker_db_1 bash -l /docker-custom-backupdb/dump_gzip.sh`















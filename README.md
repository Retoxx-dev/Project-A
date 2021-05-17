


![php version](https://img.shields.io/badge/PHP-7.4-yellow)     ![mysql version](https://img.shields.io/badge/MYSQL-8.0-yellow)

##  Description
First things first - I don't want to show up my PHP skills in this project since I'm not an PHP dev (that's why majority of this code has been taken from some youtube tutorials :o) and I haven't spend so much time improving it - you can use SQL Injection and there's only frontend validation. In this repo I want to show my early DevOps engineer skills.

## Overview
> NOTE: This is just a simple vanilla PHP/MYSQL form application.

<br/>
The first docker container contains application files (both front and backend) that are bind-mounted with host's 'Project-A' folder so you can edit it locally while container is running. In this case I needed mysqli php extension to connect with DB so I've used entrypoint to install it. The PHP container is listening on port 80. <br/> 

<br/>
The second and third docker container serves MYSQL database on port 3306 and contains adminer image (both - open port and adminer are for test purposes). Data persistancy has been achieved here using `sql-data` volume. To make sure that correct database is loaded every single time I've used sql entrypoint that executes SQL query (located in db/scheme).
<br/>



<br/>

## USAGE
<<<<<<< HEAD
~ Make sure that Docker and Docker-Compose are installed - In case you don't have it: [Docker for Windows/Mac/Linux](https://get.docker.com/)
~ Clone this repo `git clone https://github.com/Retoxx-dev/Project-A.git`
~ Open any command line and navigate to the repo's folder
~ Simply type in `docker-compose up` to start the application
~ Fire up internet browser and proceed to `http://localhost` (HTTPS hasn't been configured YET)
    
Remember to use `docker-compose down` to clean up after you finish

## STACK OVERVIEW

Compose file has been prepared as part of the production evironment. This yaml file is using docker swarm as a orchestration tool.
`Docker-stack.yml` uses images (in my case phpform:1.0 and mysqlform:1.0) and creates 1 php instance and 1 mysql instance. Obviously `build` doesn't work with stack hence you have to build previosly mentioned images on your own (Both Dockerfiles are in the project's repo)
<br/>
Since php-apache related image doesn't support secrets - `cred.php` has been created (Ye - I know, keeping credentials in plain text is asking for troubles thing but copying credentials file to non-root directory inside of the container meets minimum security standards tho). In this case I've created `cred-example.php` file as a example of how `cred.php` file should look like.

In mysql image external secrets has been implemented. Unfortunatelly for some reason `echo` command adds an additional 'next line' while creating secrets therefore I've used txt files to create them. `Mysql-database-scheme.sql` has been permanently injected into the image as a entrypoint. 


## STACK USAGE

### Prerequisites

Make sure if your swarm mode is initialized - If don't, use: `docker swarm init`.

### Swarm secrets

In order to make secrets head over to the project's repo. From there we have 2 options: create secrets using txt files or create them using echo, openssl etc.

To create them (as I did ) using text files - type:
Database name secret - `docker secret create db_name secrets/db_name.txt`
Database user - `docker secret create user secrets/db_user.txt`
Database user password - `docker secret create user_password secrets/user_password.txt`
Root password - `docker secret create mysql_root_password secrets/mysqlroot.txt`
<br/>

### PHP database credentials

Rename `cred-example.php` to `cred.php` and fill this up with database credentials. If you used echo or txt file secret just type it in.


### Docker images
Create 2 docker images - php and mysql one. Head over to the project's repo and build them:
<br/>

PHP: `docker build --tag phpform:1.0 -f Dockerfilephp .`
MYSQL: `docker build --tag mysqlform:1.0 -f Dockerfilesql .`

<br/>

### Deployment
To deploy our stack application, head over to the project's repo and type: `docker stack deploy -c docker-stack.yml app`
=======
    * Make sure Docker and Docker-Compose are installed - In case you don't have it: https://get.docker.com/)
    * Clone this repo `https://github.com/Retoxx-dev/Project-A.git`
    * Open any command line and navigate to the repo's folder
    * Simply type in `docker-compose up` to start the application
    * Fire up internet browser and proceed to `http://localhost` (security certificate hasn't been added YET)
    
Remember to use `docker-compose down` to clean up after you finish
>>>>>>> 04d0ebd489c024e0e4fa191dda0af1383dec501f

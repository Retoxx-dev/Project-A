![php version](https://img.shields.io/badge/PHP-7.4-yellow)     ![mysql version](https://img.shields.io/badge/MYSQL-8.0-yellow)

##  Description
First things first - I don't want to show up my PHP skills in this project since I'm not an PHP dev (that's why majority of this code has been taken from some youtube tutorials :o) and I haven't spend so much time improving it - you can use SQL Injection and there's only frontend validation. In this repo I want to show my early DevOps engineer skills.

## Overview
> NOTE: This is just a simple vanilla PHP/MYSQL form application.


The first docker container contains application files (both front and backend) that are bind-mounted with host's 'Project-A' folder so you can edit it locally while container is running. In this case I needed mysqli php extenstion to connect with DB so I've used entrypoint to install it. The PHP container is listening on port 80.

The second and third docker container serves MYSQL database on port 3306 and contains adminer image (both - open port and adminer are for test purposes). Data persistancy has been achieved here using `sql-data` volume. To make sure that correct database is loaded every single time I've used sql entrypoint that executes SQL query (located in db/scheme).

## USAGE
    * Make sure Docker and Docker-Compose are installed (In case you don't have it: [Docker for Windows/Mac/Linux](https://get.docker.com/))
    * Clone this repo `https://github.com/Retoxx-dev/Project-A.git`
    * Open any command line and navigate to the repo's folder
    * Simply type in `docker-compose up` to start the application
    * Fire up internet browser and proceed to `http://localhost` (security certificate hasn't been added YET)
    
Remember to use `docker-compose down` to clean up after you finish
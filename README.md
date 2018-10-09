# Introduction
Data Entry Application is designed to be a web application that provides a simple user interface to manage data. The main goal of this project is to simplify the process of data management for personal use. By designing a system that stores and retrieves data automatically to the website, the Data Entry Application has been simplified from multiple excel and paper process to a simple click and type process. I believe that with this application in action, data entry can more efficient.

# Installation
For the installation of this application, users only have to have Docker as all required software support are already loaded into the Docker container

# Technologies used to develop this application
PHP,
Html,
Css,
Javascript,
Bootsrap,
Postgresql,
Docker

# Features
1. Adding new data
What this does it adding the new data's information into the database
2. Changing data
Specific data can be changed by entering the data and that particular's data id along with the new data into the form
3. Deleting data
Data can be deleted with the permission of admin(superuser password = password)

Admin 
1. Under the admin tab, admin will be able to change admin password, add department and remove employees from the employee database
2. Password will be requested for security reason to login into the admin tab

# Postgres credentials for this project
host        = #;
port        = 5432;
dbname      = postgres;

# Developer's guide
1. PHP version used for initial development PHP 5.4.16. With centOs, you can install php with command "sudo yum install php" in terminal.
2. Apache as web server to run php files. With centOs, you can install apache with "sudo yum install httpd" command in terminal. For more info, go to https://www.tecmint.com/install-apache-on-centos-7/
3. You can use a light weight editor of your liking to edit the html, css, javascript and php codes. I chose to use sublime text as my editor. https://www.sublimetext.com/3
4. To download postgresql, follow the instruction from postgresql's official website. https://www.postgresql.org/download/linux/redhat/ After the installation of postgresql, you have to install PostgreSQL extension for postgres-php interface to work. https://www.tutorialspoint.com/postgresql/postgresql_php.htm Once you got it to work, you can use PHP Api to seamlessly work with postgresql.
5. To put your project in docker, first you have to download Docker on your computer. https://docs.docker.com/install/linux/docker-ce/centos/#prerequisites Once downloaded, you have to start Docker on your machine and create a Dockerfile in your code directory and input all the commands to assemble an image. In my dockerfile, my commands were 
FROM php:7.3-rc-apache
RUN apt-get update \
    && apt-get install -y --no-install-recommends  libpq-dev libpq5 \
    && docker-php-ext-install pgsql pdo_pgsql\
    && apt-get purge -y --auto-remove libpq-dev \
    && rm -rf /var/lib/apt/lists/*
COPY . /var/www/html
After inputting all the commands needed, you have to build an image from Dockerfile by calling the docker build command in the terminal. After that, you have to run your image in the container by calling docker run command. 


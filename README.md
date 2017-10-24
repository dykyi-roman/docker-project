#Docker project (nginx + php-fpm + postgresql + mongodb)
=======

## Install

+ Install docker-compose
+ docker login
+ docker-compose up -d

The script from the official PHP image from Docker Hub makes it easy to install the required extensions

[docker-php-ext-install](https://github.com/docker-library/php/blob/master/docker-php-ext-install)

## Command

+ `docker ps` - List containers  
+ `docker exec -it <process-hash> bash` - Run a command in a running container
+ `docker commit -m "added comment text" <process-hash> <my-login/repo:tag-name>` - Create a new image from a container’s changes
+ `docker push <my-login/repo:tag-name` - Push an image or a repository to a registry    

## Add the Initial Admin Use For MongoDB

> `docker exec -it some-mongo mongo admin
  connecting to: admin
  > db.createUser({ user: 'jsmith', pwd: 'some-initial-password', roles: [ { role: "userAdminAnyDatabase", db: "admin" } ] });
  Successfully added user: {
      "user" : "jsmith",
      "roles" : [
          {
              "role" : "userAdminAnyDatabase",
              "db" : "admin"
          }
      ]
  }`
  
### Usage:

`$manager = new MongoDB\Driver\Manager("mongodb://mongo:27017");`  
  

## Author
[Dykyi Roman](https://www.linkedin.com/in/roman-dykyi-43428543/), e-mail: [mr.dukuy@gmail.com](mailto:mr.dukuy@gmail.com)

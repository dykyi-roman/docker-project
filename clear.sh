#!/bin/bash

# Stop and remove all containers
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)

# Remove dangling volumes
docker volume rm $(docker volume ls -f dangling=true -q)

#Removing Docker Images
docker rmi $(docker images -a -q)
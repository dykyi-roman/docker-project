#!/bin/bash

DB="mydb"
USER="root"
PASS="root"

mysql -uroot -proot -e "CREATE DATABASE $DB CHARACTER SET utf8 COLLATE utf8_general_ci";

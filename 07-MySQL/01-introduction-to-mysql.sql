/*
MySQL is an open-source relational database management
system (RDBMS) that is widely used for storing and
managing structured data. It is one of the most popular
database systems in the world and is known for its
reliability, performance, and ease of use.
*/

-- Connection to Mysql (Terminal)
mysql
-u USERNAME -p PASSWORD

-- Creating a Database
CREATE DATABASE db_name;

-- Listing Databases
SHOW DATABASES;

-- Deleting a Database
DROP
DATABASE db_name;

-- Updating a Database
ALTER
DATABASE db_name;

-- Selecting a Database
USE db_name;

-- Setting Database Charset
CREATE
DATABASE db_name CHARACTER SET utf8mb4
       COLLATE utf8mb4_general_ci;

-- Updating Database Charset
ALTER
DATABASE db_name CHARACTER SET utf8
      COLLATE utf8_general_ci;

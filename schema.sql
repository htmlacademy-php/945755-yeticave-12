CREATE DATABASE IF NOT EXISTS yeticave
DEFAULT CHARACTER SET UTF8
DEFAULT COLLATE UTF8_GENERAL_CI ;

use yeticave;

CREATE TABLE IF NOT EXISTS categories (
id INT AUTO_INCREMENT PRIMARY KEY,
name varchar(128) not null
);

CREATE TABLE IF NOT EXISTS lot (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
name varchar(128) not null,
lot_creator varchar(128) not null,
lot_category varchar(128) not null,
lot_winer varchar(128),
description varchar(128) not null,
path text(255),
start_price int not null,
complition_time timestamp,
step decimal(8,2)
);

CREATE TABLE IF NOT EXISTS bid (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_price_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
bid_price decimal(8,2) not null,
bit_creator varchar(128) not null,
bit_lot varchar(128) not null
);

CREATE TABLE IF NOT EXISTS user (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_registration_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
email varchar(128) not null unique,
username varchar(128) not null unique,
password varchar(128) not null,
user_contact varchar(128) not null
);

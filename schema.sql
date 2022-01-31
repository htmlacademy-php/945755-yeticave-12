CREATE DATABASe yeticave
DEFAULT CHARACTER SET UTF8
DEFAULT COLLATE UTF8_GENERAL_CI ;

use yeticave;

CREATE TABLE categories (
id INT AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(64),
category_id INT(64)
);

CREATE TABLE lot (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
name char(255),
description char(255),
path char(255),
start_price int,
next_time timestamp,
step int
);

CREATE TABLE bid (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_price_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
bid_price int
);

CREATE TABLE user (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_registration_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
email varchar(128) not null unique,
username char(64) not null unique,
password char(64),
user_contact char(255)
);

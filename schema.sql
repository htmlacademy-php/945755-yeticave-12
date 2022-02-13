CREATE DATABASE IF NOT EXISTS yeticave
DEFAULT CHARACTER SET UTF8
DEFAULT COLLATE UTF8_GENERAL_CI ;

use yeticave;

CREATE TABLE IF NOT EXISTS categories (
id INT AUTO_INCREMENT PRIMARY KEY,
name varchar(128) not null,
code varchar(128) not null
);

CREATE TABLE IF NOT EXISTS lot (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
name varchar(128) not null,
userID int not null,
categoryID int not null,
winerID int,
description varchar(128) not null,
path text(255),
start_price decimal(8,2),
complition_time timestamp,
step decimal(8,2)
);

CREATE TABLE IF NOT EXISTS bid (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_price_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
bid_creator int not null,
bid_lot int not null
);

CREATE TABLE IF NOT EXISTS user (
id INT AUTO_INCREMENT PRIMARY KEY,
dt_registration_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
email varchar(128) not null unique,
username varchar(128) not null unique,
password varchar(128) not null,
user_contact varchar(128) not null,
user_bid int,
user_lot int
);

ALTER TABLE lot ADD
FOREIGN KEY (userID) REFERENCES user (id);

ALTER TABLE lot ADD
FOREIGN KEY (categoryID) REFERENCES categories (id);

ALTER TABLE lot ADD
FOREIGN KEY (winerID) REFERENCES bid (id);

ALTER TABLE bid ADD
FOREIGN KEY (bid_creator) REFERENCES user (id);

ALTER TABLE bid ADD
FOREIGN KEY (bid_lot) REFERENCES lot (id);

ALTER TABLE user ADD
FOREIGN KEY (user_lot) REFERENCES lot (id);

ALTER TABLE user ADD
FOREIGN KEY (user_bid) REFERENCES bid (id);

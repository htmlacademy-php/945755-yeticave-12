insert into categories set name = 'boards' , code = '1';
insert into categories set name = 'fasteners' , code = '2';
insert into categories set name = 'boots' , code = '3';
insert into categories set name = 'clothes' , code = '4';
insert into categories set name = 'tools' , code = '5';
insert into categories set name = 'other' , code = '6';

insert into user set email = 'ivan@mail.ru' , username = 'Иван' , password = '1234' , user_contact = '79215554444';
insert into user set email = 'olya@mail.ru' , username = 'Оля' , password = '4321' , user_contact = '79211234567';

insert into lot set name = '2014 Rossignol District Snowboard' , userID = '1' , categoryID = '1' , description = '' , path = 'img/lot-1.jpg' , start_price = '10999' , complition_time = '2022-03-25' , step = '100';
insert into lot set name = 'DC Ply Mens 2016/2017 Snowboard' , userID = '1' , categoryID = '2' , description = '' , path = 'img/lot-2.jpg' , start_price = '159999' , complition_time = '2022-03-21' , step = '100';
insert into lot set name = 'Крепления Union Contact Pro 2015 года размер L/XL' , userID = '2' , categoryID = '3' , description = '' , path = 'img/lot-3.jpg' , start_price = '8000' , complition_time = '2022-03-19' , step = '100';
insert into lot set name = 'Ботинки для сноуборда DC Mutiny Charocal' , userID = '1' , categoryID = '4' , description = '' , path = 'img/lot-4.jpg' , start_price = '10999' , complition_time = '2022-03-25' , step = '100';
insert into lot set name = 'Куртка для сноуборда DC Mutiny Charocal' , userID = '1' , categoryID = '5' , description = '' , path = 'img/lot-5.jpg' , start_price = '7500' , complition_time = '2022-03-22' , step = '100';
insert into lot set name = 'Маска Oakley Canopy' , userID = '2' , categoryID = '6' , description = '' , path = 'img/lot-6.jpg' , start_price = '5400' , complition_time = '2022-03-20' , step = '100';

insert into bid set bid_creator = '1', bid_lot = '3';
insert into bid set bid_creator = '2', bid_lot = '1';


SELECT * FROM categories;

SELECT l.NAME, start_price, path, c.name FROM lot l JOIN categories c ON l.categoryID = c.id;

SELECT * FROM lot WHERE id=3;
SELECT c.name FROM lot l JOIN categories c ON l.ID = c.id;

UPDATE lot SET NAME = 'Измененное название' WHERE id = 4;

SELECT * FROM bid WHERE id > 0 ORDER BY dt_price_add ASC;

CREATE DATABASE `Movies` 
CHARACTER SET UTF8 
COLLATE UTF8_GENERAL_CI;

USE `Movies`;


CREATE TABLE `directors` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`director_name` VARCHAR(30) NOT NULL,
	`notes` VARCHAR(255) NULL
);

CREATE TABLE `genres` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`genre_name` VARCHAR(30) NOT NULL,
	`notes` VARCHAR(255) NULL
);

CREATE TABLE `categories` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`category_name` VARCHAR(30) NOT NULL,
	`notes` VARCHAR(255) NULL
);

CREATE TABLE `movies` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`title` VARCHAR(30) NOT NULL,
	`director_id` INT NOT NULL,
	`copyright_year` DATETIME NULL,
	`length` FLOAT NULL,
	`genre_id` INT NOT NULL,
	`category_id` INT NOT NULL,
	`rating` FLOAT NULL,
	`notes` VARCHAR(255) NULL
);

INSERT INTO `directors`
	(`id`, `director_name`, `notes`)
VALUES
	(1, 'Ivan', 'asd ww'),
	(2, 'Gosho', 'asdfffa ww'),
	(3, 'Iva', 'asdddasda fffa ww'),
	(4, 'Pesho', 'asdadadaasda ffw'),
	(5, 'Erko', 'aasda fdddw');

INSERT INTO `genres`
	(`id`, `genre_name`, `notes`)
VALUES
	(1, 'dda', 'asd ww'),
	(2, 'ffa', 'asdfffa ww'),
	(3, 'ssd', 'asdddasda fffa ww'),
	(4, 'nnb', 'asdadadaasda ffw'),
	(5, 'jjh', 'aasda fdddw');

INSERT INTO `categories`
	(`id`, `category_name`, `notes`)
VALUES
	(1, 'games', 'asd ww'),
	(2, 'music', 'asdfffa ww'),
	(3, 'pics', 'asdddasda fffa ww'),
	(4, 'ot', 'asdadadaasda ffw'),
	(5, 'nz', 'aasda fdddw');
	
INSERT INTO `movies`
	(`id`, `title`, `director_id`, `copyright_year`, `length`, `genre_id`, `category_id`, `rating`, `notes`)
VALUES
	(1, 'Title1', 1, NOW(), 5, 2, 1, 98.2, 'boring note'),
	(2, 'Title2', 2, NOW(), 12, 1, 5, 87, 'tired'),
	(3, 'T3', 3, NOW(), 52.6, 4, 2, 24.8, 'Noteeee'),
	(4, 'T4', 4, NOW(), 41.23, 3, 3, 44, 'Yess note'),
	(5, 'T5', 5, NOW(), 8.1, 5, 4, 78.72, NULL);
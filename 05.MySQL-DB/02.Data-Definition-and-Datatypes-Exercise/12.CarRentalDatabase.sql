
CREATE DATABASE `car_rental` 
CHARACTER SET UTF8 
COLLATE UTF8_GENERAL_CI;

USE `car_rental`;




CREATE TABLE `categories` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`category` VARCHAR(30) NOT NULL,
	`daily_rate` FLOAT NULL,
	`weekly_rate` FLOAT NULL,
	`monthly_rate` FLOAT NULL,
	`weekend_rate` FLOAT NULL
);

CREATE TABLE `cars` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`plate_number` VARCHAR(30) NOT NULL,
	`make` VARCHAR(255) NOT NULL,
	`model` VARCHAR(255) NOT NULL,
	`car_year` YEAR NOT NULL,
	`category_id` INT NOT NULL,
	`doors` INT NOT NULL,
	`picture`BLOB NULL,
	`car_condition` VARCHAR(255) NULL,
	`available` BOOL NOT NULL
);

CREATE TABLE `employees` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`first_name` VARCHAR(30) NOT NULL,
	`last_name` VARCHAR(30) NOT NULL,
	`title` VARCHAR(30) NOT NULL,
	`notes` VARCHAR(255) NULL
);

CREATE TABLE `customers` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`driver_licence_number` VARCHAR(30) NOT NULL,
	`full_name` VARCHAR(100) NOT NULL,
	`address` VARCHAR(100) NOT NULL,
	`city` VARCHAR(30) NOT NULL,
	`zip_code` INT NOT NULL,
	`notes` VARCHAR(255) NULL
);

CREATE TABLE `rental_orders` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`employee_id`INT NOT NULL,
	`customer_id` INT NOT NULL,
	`car_id` INT NOT NULL,
	`car_condition` VARCHAR(50) NULL,
	`tank_level` INT NOT NULL,
	`kilometrage_start` INT NOT NULL,
	`kilometrage_end` INT NOT NULL,
	`total_kilometrage` INT NOT NULL,
	`start_date` DATE NULL,
	`end_date` DATE NULL,
	`total_days` INT NULL,
	`rate_applied` BOOL NOT NULL,
	`tax_rate` FLOAT NULL,
	`order_status` BOOL NOT NULL,
	`notes` VARCHAR(255) NULL
);


INSERT INTO `categories`
	(`id`, `category`, `daily_rate`, `weekly_rate`, `monthly_rate`, `weekend_rate`)
VALUES
	(1, 'toilet', 2.55, 42.1, 89, 33.754),
	(2, 'paper', 6.532, 23.9, 24.1, 42.88),
	(3, 'scissors', 98.2, 76.3, 47, 76);
	
	
INSERT INTO `cars`
	(`id`, `plate_number`, `make`, `model`, `car_year`, `category_id`, `doors`, `picture`, `car_condition`, `available`)
VALUES
	(1, '61234K', 'OKI', '6223MN', NOW(), 1, 4, NULL, NULL, TRUE),
	(2, '54141LS', 'LTD', '8712LS', '2007', 3, 4, NULL, NULL, FALSE),
	(3, '4677dsF', 'making', '999AMG', '2013', 2, 2, NULL, NULL, TRUE);
	
	
	
INSERT INTO `employees`
	(`id`, `first_name`, `last_name`, `title`, `notes`)
VALUES
	(1, 'Ivan', 'Armen', 'Title1', 'Examploe notes'),
	(2, 'Tosho', 'Grigorov', 'T2', NULL),
	(3, 'Asen', 'Ivanov', 'T33', NULL);
	
	
	
INSERT INTO `customers`
	(`id`, `driver_licence_number`, `full_name`, `address`, `city`, `zip_code`, `notes`)
VALUES
	(1, 'kk13k', 'Tashko Irkan Tashov', 'Kasal 25 B', 'Kz', 3394, NULL),
	(2, 'pa233a', 'Ivan Goshov Ivanov', 'Ralan 65 A', 'Sf', 3210, NULL),
	(3, 'pp224kl', 'Asen Stoqnov Ivanov', 'Dalkan 1w', 'Stz', 1273, 'W/e wee');



INSERT INTO `rental_orders`
	(`id`, `employee_id`, `customer_id`, `car_id`, `car_condition`, `tank_level`, `kilometrage_start`, 
	`kilometrage_end`, `total_kilometrage`, `start_date`, `end_date`, `total_days`, `rate_applied`,
	 `tax_rate`, `order_status`, `notes`)
VALUES
	(1, 2, 3, 1, 'Idk', 15, 221, 390, 900, NOW(), NULL, NULL, TRUE, 1.95, TRUE, 'Examp notes'),
	(2, 3, 1, 2,  'pwd', 22, 331, 339, 1020, NOW(), NULL, NULL, FALSE, 3.11, FALSE, NULL),
	(3, 1, 2, 3, 'pp2', 31, 312, 221, 3112, NOW(), NULL, NULL, TRUE, 2.55, FALSE, NULL);
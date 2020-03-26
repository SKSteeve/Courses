
CREATE DATABASE `Hotel` 
CHARACTER SET UTF8 
COLLATE UTF8_GENERAL_CI;

USE `Hotel`;





CREATE TABLE `employees` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`first_name` VARCHAR(30) NOT NULL,
	`last_name` VARCHAR(30) NOT NULL,
	`title` VARCHAR(30) NOT NULL,
	`notes` VARCHAR(255) NULL
);

INSERT INTO `employees`
	(`id`, `first_name`, `last_name`, `title`, `notes`)
VALUES
	(1, 'Ivan', 'Armen', 'Title1', 'Examploe notes'),
	(2, 'Tosho', 'Grigorov', 'T2', NULL),
	(3, 'Asen', 'Ivanov', 'T33', NULL);

CREATE TABLE `customers` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`account_number` INT NOT NULL,
	`first_name` VARCHAR(30) NOT NULL,
	`last_name` VARCHAR(30) NOT NULL,
	`phone_number` INT NULL,
	`emergency_name` VARCHAR(30) NULL,
	`emergency_number` INT NULL,
	`notes` VARCHAR(255) NULL
);

INSERT INTO `customers`
	(`id`, `account_number`, `first_name`, `last_name`, `phone_number`, `emergency_name`, `emergency_number`, `notes`)
VALUES
	(1, 3394, 'Ivan', 'Armen', 08124912, 'Police', 112, NULL),
	(2, 3210, 'Tosho', 'Grigorov', 019249121, 'Medic', 113, NULL),
	(3, 1273, 'Asen', 'Ivanov', 0129481274, 'Idk', 114, 'W/e wee');


CREATE TABLE `room_status` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`room_status` BOOL NOT NULL,
	`notes` VARCHAR(255) NULL
);

INSERT INTO `room_status` 
	(`id`, `room_status`, `notes`)
VALUES
	(1, TRUE, 'ASD note'),
	(2, FALSE, NULL),
	(3, FALSE, NULL);

CREATE TABLE `room_types` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`room_type` VARCHAR(30) NOT NULL,
	`notes` VARCHAR(255) NULL
);

INSERT INTO `room_types` 
	(`id`, `room_type`, `notes`)
VALUES
	(1, 'small', 'ASD note'),
	(2, 'bedroom', NULL),
	(3, 'big', NULL);

CREATE TABLE `bed_types` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`bed_type` VARCHAR(30) NOT NULL,
	`notes` VARCHAR(255) NULL
);

INSERT INTO `bed_types` 
	(`id`, `bed_type`, `notes`)
VALUES
	(1, 'big', 'ASD note'),
	(2, 'medium', NULL),
	(3, 'big', NULL);


CREATE TABLE `rooms` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`room_number`INT NOT NULL,
	`room_type`VARCHAR(50) NULL,
	`bed_type` VARCHAR(50) NULL,
	`rate` FLOAT NULL,
	`room_status` BOOL NOT NULL,
	`notes` VARCHAR(255) NULL
);


INSERT INTO `rooms` 
	(`id`, `room_number`, `room_type`, `bed_type`, `rate`, `room_status`, `notes`)
VALUES
	(1, 223, 'small', 'big', 3.1, FALSE, 'ASD note'),
	(2, 123, 'large', 'medium', 3.9, TRUE, NULL),
	(3, 44, 'big', 'big', 4.1, TRUE, NULL);
	
	
CREATE TABLE `payments` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`employee_id` INT NOT NULL,
	`payment_date` DATE NULL,
	`account_number` INT NOT NULL,
	`first_date_occupied` DATE NULL,
	`last_date_occupied` DATE NULL,
	`total_days` INT NULL,
	`amount_charged` INT NULL,
	`tax_rate` FLOAT NULL,
	`tax_amount` FLOAT NULL,
	`payment_total` FLOAT NULL,
	`notes` VARCHAR(255) NULL
);

INSERT INTO `payments` 
	(`id`, `employee_id`, `payment_date`, `account_number`, `first_date_occupied`, `last_date_occupied`,
	`total_days`, `amount_charged`, `tax_rate`, `tax_amount`, `payment_total`, `notes`)
VALUES
	(1, 2, NOW(), 091243121, NULL, NULL, NULL, NULL, 3.1, NULL, NULL, 'ASD note'),
	(2, 3, NOW(), 091283123, NULL, NULL, NULL, NULL, 3.9, NULL, NULL, NULL),
	(3, 1, NULL, 091284188, NULL, NULL, NULL, NULL, 4.1, NULL, NULL, NULL);
	
	
CREATE TABLE `occupancies` (
	`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`employee_id` INT NOT NULL,
	`date_occupied` DATE NULL,
	`account_number` INT NOT NULL,
	`room_number` INT NULL,
	`rate_applied` FLOAT NULL,
	`phone_charge` INT NOT NULL,
	`notes` VARCHAR(255) NULL
);


INSERT INTO `occupancies` 
	(`id`, `employee_id`, `date_occupied`, `account_number`, `room_number`, `rate_applied`, `phone_charge`, `notes`)
VALUES
	(1, 2, NOW(), 091243121, 44, 3.1, 14, 'ASD note'),
	(2, 1, NOW(), 091283123, 14, 3.9, 18, NULL),
	(3, 3, NULL, 091284188, 31, 4.1, 39, NULL);
	
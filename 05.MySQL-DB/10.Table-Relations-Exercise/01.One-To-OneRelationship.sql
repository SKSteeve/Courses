
CREATE DATABASE `tr_exercise` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tr_exercise`;

CREATE TABLE `persons` (
	`person_id` INT PRIMARY KEY AUTO_INCREMENT,
	`frist_name` VARCHAR(50) NOT NULL,
	`salary` DECIMAL(10,2) NOT NULL,
	`passport_id` INT UNIQUE NOT NULL
);

CREATE TABLE `passports` (
	`passport_id` INT PRIMARY KEY,
	`passport_number` VARCHAR(50) UNIQUE NOT NULL
);

INSERT INTO `passports`
VALUES
	(101, 'N34FG21B'),
	(102, 'K65LO4R7'),
	(103, 'ZE657QP2');

INSERT INTO `persons`
	(`person_id`, `frist_name`, `salary`, `passport_id`)
VALUES
	(1, 'Roberto', 43300.00, 102),
	(2, 'Tom', 56100.00, 103),
	(3, 'Yana', 60200.00, 101);
	
ALTER TABLE `persons`
ADD CONSTRAINT `fk_persons_passports`
FOREIGN KEY `persons`(`passport_id`)
REFERENCES `passports`(`passport_id`);
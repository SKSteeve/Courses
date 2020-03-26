
CREATE DATABASE `soft_uni` 
CHARACTER SET UTF8 
COLLATE UTF8_GENERAL_CI;

USE `soft_uni`;


CREATE TABLE `towns` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`name` VARCHAR(30) NOT NULL
);

CREATE TABLE `addresses` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`address_text` VARCHAR(100) NOT NULL,
	`town_id` INT NOT NULL,
	CONSTRAINT fk_addresses_towns
	FOREIGN KEY `addresses`(`town_id`)
	REFERENCES `towns`(`id`)
);

CREATE TABLE `departments` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`name` VARCHAR(30) NOT NULL
);

CREATE TABLE `employees` (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`first_name` VARCHAR(30) NOT NULL,
	`middle_name` VARCHAR(30) NOT NULL,
	`last_name` VARCHAR(30) NOT NULL,
	`job_title` VARCHAR(30) NOT NULL,
	`department_id` INT NOT NULL,
	`hire_date` DATE NULL,
	`salary` DECIMAL(10,2) NOT NULL,
	`address_id` INT NOT NULL,
	
	CONSTRAINT fk_employees_departments
	FOREIGN KEY `employees`(`department_id`)
	REFERENCES `departments`(`id`),
	
	CONSTRAINT fk_employees_addresses
	FOREIGN KEY `employees`(`address_id`)
	REFERENCES `addresses`(`id`)
);
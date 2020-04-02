
CREATE DATABASE `company`;
USE `company`;

CREATE TABLE `projects` (
	`id` INT(11) UNSIGNED UNIQUE AUTO_INCREMENT PRIMARY KEY,
   `client_id` INT(11) UNSIGNED,
   `project_lead_id` INT(11) UNSIGNED
);

CREATE TABLE `clients` (
   `id` INT(11) UNSIGNED UNIQUE AUTO_INCREMENT PRIMARY KEY,
   `client_name` VARCHAR(100) NOT NULL,
   `project_id` INT(11) UNSIGNED
);

CREATE TABLE `employees` (
   `id` INT(11) UNSIGNED UNIQUE AUTO_INCREMENT PRIMARY KEY,
   `first_name` VARCHAR(30) NOT NULL,
   `last_name` VARCHAR(30) NOT NULL,
   `project_id` INT(11) UNSIGNED
);

ALTER TABLE `projects`
ADD CONSTRAINT `fk_projects_clients` 
FOREIGN KEY (`client_id`)
REFERENCES `clients` (`id`),
ADD CONSTRAINT `fk_projects_employees` 
FOREIGN KEY (`project_lead_id`)
REFERENCES `employees` (`id`);

ALTER TABLE `clients`
ADD CONSTRAINT `fk_clients_projects` 
FOREIGN KEY (`project_id`)
REFERENCES `projects` (`id`);

ALTER TABLE `employees`
ADD CONSTRAINT `fk_employees_projects` 
FOREIGN KEY (`project_id`)
REFERENCES `projects` (`id`);
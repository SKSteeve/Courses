CREATE TABLE `students` (
	`first_name` VARCHAR(50) NOT NULL,
	`last_name` VARCHAR(50) NOT NULL,
	`number` INT NOT NULL DEFAULT '0',
	`phone` INT NOT NULL DEFAULT '0',
	`record_date` DATE NOT NULL PRIMARY KEY,
	`is_active` BOOLEAN NOT NULL
);
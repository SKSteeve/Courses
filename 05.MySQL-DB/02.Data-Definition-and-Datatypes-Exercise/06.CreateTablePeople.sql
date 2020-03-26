USE `minions`; 

CREATE TABLE `people` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(200) NOT NULL,
	`picture` BLOB NULL,
	`height` FLOAT NULL,
	`weight` FLOAT NULL,
	`gender` CHAR(2) NOT NULL,
	`birthdate` DATETIME NOT NULL,
	`biography` TEXT NULL
);

INSERT INTO `people` 
	(`id`, `name`, `picture`, `height`, `weight`, `gender`, `birthdate`, `biography`)
VALUES
	(1, 'Ivan', NULL, 1.98, 85.6, 'm', '1999-09-13 13:54:12', 'Example teblas asfajsfj'),
	(2, 'Gosho', NULL, 1.67, 65.2, 'm', '1997-01-13 13:04:12', 'ample text blalas asfajsfj'),
	(3, 'Mariela', NULL, 1.73, 57.6, 'f', '2002-01-13 12:53:18', 'Example text bla asfajsfj'),
	(4, 'Asen', NULL, 1.81, 69.9, 'm', NOW(), 'Emple text blalblas asfajsfj'),
	(5, 'Rado', NULL, 1.76, 71.7, 'm', '2000-04-19 13:54:12', 'Exaple tealblas asfajsfj');
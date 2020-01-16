CREATE TABLE `people` (
	`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(200) NOT NULL,
	`picture` BLOB NULL,
	`height` FLOAT(2) NULL,
	`weight` FLOAT(2) NULL,
	`gender` CHAR NOT NULL,
	`birthdate` DATE NOT NULL,
	`biography` LONGTEXT NULL
	
);

INSERT INTO `people` (`id`, `name`, `picture`, `height`, `weight`, `gender`, `birthdate`, `biography`)
VALUES (1, 'Ilqn', '/db/pic', 1.85, 70.1, 'm', '2001-08-15', 'I have to work hard to succeed.'), 
(2, 'Ivan', '/db/pic', 1.65, 72.6, 'm', '1998-02-10', 'Same here.'),
(3, 'Mariela', '/db/pic', 1.58, 60.30, 'f', '2002-02-21', 'Idk what to study.'),
(4, 'Sonai', '/db/pic', 1.89, 95.8, 'm', '2000-12-05', 'Im body builder.'),
(5, 'Gosho', '/db/pic', 1.67, 62.00, 'm', '1994-04-19', 'I am gamer.');
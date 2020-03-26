USE `minions`; 

CREATE TABLE `users` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`username` VARCHAR(30) NOT NULL,
	`password` VARCHAR(26) NOT NULL,
	`profile_picture` BLOB NULL,
	`last_login_time` DATETIME NULL,
	`is_deleted` BOOL NULL
);

INSERT INTO `users` 
	(`id`, `username`, `password`, `profile_picture`, `last_login_time`, `is_deleted`)
VALUES
	(1, 'Ivan', '2313132', NULL, '1999-09-13 13:54:12', false),
	(2, 'Gosho', '87591248221', NULL, '1997-01-13 13:04:12', true),
	(3, 'Mariela', 'kasfl321313s', NULL, '2002-01-13 12:53:18', true),
	(4, 'Asen', 'lasfawq214', NULL, NOW(), NULL),
	(5, 'Rado', 'owafjw214lsa', NULL, '2000-04-19 13:54:12', false);
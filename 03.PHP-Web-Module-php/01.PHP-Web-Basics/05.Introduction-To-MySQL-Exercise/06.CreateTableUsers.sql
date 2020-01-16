CREATE TABLE `users` (
	`id` BIGINT PRIMARY KEY AUTO_INCREMENT,
	`username` VARCHAR(30) UNIQUE NOT NULL,
	`password` VARCHAR(26) NOT NULL,
	`profile_picture` MEDIUMBLOB,
	`last_login_time` DATETIME,
	`is_deleted` BOOL
);



INSERT INTO `users` (`username`, `password`, `profile_picture`, `last_login_time`, `is_deleted`)
VALUES ('Ilqn', '60kiranSum', '/db/pic', '2019-12-03 13:03:45', FALSE), 
		('Ivan', 'aKilOOsm', '/db/pic', '2009-08-02 23:09:06', TRUE),
		('Mariela', 'Asda12314fg', '/db/pic', '2012-11-09 17:44:14', FALSE),
		('Sonai', 'asd1!@#1f', '/db/pic', '2014-02-18 13:01:32', FALSE),
		('Gosho', 'DAasdo124', '/db/pic', '2013-05-23 18:43:12', TRUE);
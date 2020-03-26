USE `minions`; 

ALTER TABLE `users`
DROP PRIMARY KEY,
ADD CONSTRAINT `pk_id`
PRIMARY KEY(`id`),
ADD CONSTRAINT `uq_username`
UNIQUE(`username`);
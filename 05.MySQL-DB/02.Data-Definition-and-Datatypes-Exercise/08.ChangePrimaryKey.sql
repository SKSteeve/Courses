USE `minions`; 

ALTER TABLE `users`
	MODIFY `id` INT NOT NULL;

ALTER TABLE `users`
	DROP PRIMARY KEY;
  
ALTER TABLE `users`
	ADD CONSTRAINT `pk_users` PRIMARY KEY (`id`,`username`);
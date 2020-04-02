
USE `camp`;

ALTER TABLE `peaks`
ADD CONSTRAINT `fk_peak_mountain`
FOREIGN KEY (`mountain_id`)
REFERENCES `mountains`(`id`)
ON DELETE CASCADE;
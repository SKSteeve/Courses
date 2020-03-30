
USE `diablo`;


SELECT
	`name`, DATE_FORMAT(`start`, '%Y-%m-%d')
FROM
	`games` 
WHERE
	EXTRACT(YEAR FROM `start`) BETWEEN 2011 AND 2012
ORDER BY
	`start` ASC,
	`name` ASC
LIMIT 50;

USE `fsd`;

SELECT
	p.`id`,
	CONCAT(p.`first_name`, ' ', p.`last_name`) AS `full_name`,
	p.`age`,
	p.`position`,
	p.`hire_date`
FROM
	`players` AS p
JOIN
	`skills_data` AS s
	ON	p.`skills_data_id` = s.`id`
WHERE
	p.`position` = 'A'
	AND p.`age` < 20
	AND p.`hire_date` IS NULL
	AND s.strength > 50
ORDER BY
	`salary` ASC,
	`age` ASC;
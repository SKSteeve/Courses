
USE `soft_uni`;

DELIMITER $$
CREATE PROCEDURE usp_get_employees_by_salary_level(salary_level VARCHAR(7))
BEGIN
   SELECT
		e.`first_name`,
		e.`last_name`
   FROM
		`employees` AS e
   WHERE
		e.`salary` < 30000 AND salary_level = 'low'
		OR e.`salary` >= 30000 AND e.`salary` <= 50000 AND salary_level = 'average'
		OR e.`salary` > 50000 AND `salary_level` = 'high'
	ORDER BY
		e.`first_name` DESC,
		e.`last_name` DESC;
END $$
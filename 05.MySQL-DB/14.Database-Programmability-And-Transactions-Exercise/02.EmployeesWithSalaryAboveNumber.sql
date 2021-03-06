
USE `soft_uni`;

DELIMITER $$
CREATE PROCEDURE usp_get_employees_salary_above(min_salary DECIMAL(19, 4))

BEGIN
	SELECT
		`first_name`,
		`last_name`
	FROM
		`employees`
	WHERE
		`salary` >= min_salary
	ORDER BY
		`first_name` ASC,
		`last_name` ASC,
		`employee_id` ASC;
END $$
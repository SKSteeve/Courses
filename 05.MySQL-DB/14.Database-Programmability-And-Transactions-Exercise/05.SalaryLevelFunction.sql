
USE `soft_uni`;

DELIMITER $$
CREATE FUNCTION ufn_get_salary_level(employee_salary DECIMAL)
RETURNS VARCHAR(30)
BEGIN
	DECLARE result VARCHAR(30);
	
	IF employee_salary < 30000 THEN SET result := 'Low';
	ELSEIF employee_salary BETWEEN 30000 AND 50000 THEN SET result := 'Average';
	ELSE SET result := 'High';
	END IF;
	
	RETURN result;
END $$
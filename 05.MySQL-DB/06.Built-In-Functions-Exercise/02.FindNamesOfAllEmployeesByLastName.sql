
USE `soft_uni`;

SELECT `first_name`, `last_name`
FROM `employees`
WHERE LOCATE('ei', LOWER(`last_name`)) > 0
ORDER BY `employee_id`;
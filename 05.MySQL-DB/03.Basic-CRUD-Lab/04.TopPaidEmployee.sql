USE `hospital`;

CREATE VIEW `test_view` AS
SELECT * FROM `employees`
ORDER BY `salary` DESC
LIMIT 1

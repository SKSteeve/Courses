USE `soft_uni`;

DELIMITER %-%
CREATE PROCEDURE usp_get_towns_starting_with(sub_str VARCHAR(50))
BEGIN
	SELECT
		`name`
	FROM
		`towns`
	WHERE
		`name` LIKE CONCAT(sub_str, '%')
	ORDER BY
		`name` ASC;
END %-%
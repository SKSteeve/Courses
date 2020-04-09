USE `bank`;

DELIMITER $$
CREATE PROCEDURE `usp_get_holders_with_balance_higher_than`(`balance_parameter` DECIMAL (13,4))
BEGIN
	SELECT 
	    ah.`first_name`,
		 ah.`last_name`
	FROM
	   `account_holders` AS ah
	JOIN
		`accounts` AS a
		ON ah.`id` = a.`account_holder_id`
	GROUP BY
		ah.`id`
	HAVING
		SUM(a.`balance`) >= `balance_parameter`
	ORDER BY
		a.`id`,
		ah.`first_name` DESC,
		ah.`last_name`;
END $$
DELIMITER ;

CALL `usp_get_holders_with_balance_higher_than`(7000);
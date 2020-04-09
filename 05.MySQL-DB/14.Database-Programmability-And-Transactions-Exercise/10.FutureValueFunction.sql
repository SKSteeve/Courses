USE `bank`;

DELIMITER $$
CREATE FUNCTION ufn_calculate_future_value(initial_sum DECIMAL(19, 4), interest_rate DECIMAL(19, 4), years INT)
RETURNS DECIMAL(19, 4)
BEGIN
	RETURN initial_sum * POW((1 + interest_rate), years);
END $$
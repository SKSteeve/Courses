
USE `fsd`;

UPDATE
	`coaches` AS c
SET
	c.`coach_level` = c.`coach_level` + 1
WHERE
	c.`id` = (
			SELECT
				`coach_id`
			FROM
				`players_coaches` AS pc
			WHERE
				pc.`coach_id` = c.`id`
			LIMIT 1
	)
	AND `first_name` LIKE 'A%';
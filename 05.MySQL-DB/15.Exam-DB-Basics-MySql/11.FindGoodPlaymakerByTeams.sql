
USE `fsd`;

DELIMITER $$
CREATE PROCEDURE udp_find_playmaker(min_dribble_points INT(11), team_name VARCHAR(45))
BEGIN
	SELECT
		CONCAT(p.`first_name`, ' ', p.`last_name`) AS `full_name`,
		p.`age`,
		p.`salary`,
		s.`dribbling`,
		s.`speed`,
		t.`name` AS `team_name`
	FROM
		`players` AS p
	JOIN
		`teams` AS t
		ON p.`team_id` = t.`id`
	JOIN
		`skills_data` AS s
		ON p.`skills_data_id` = s.`id`
	WHERE
		s.`dribbling` >= min_dribble_points
		AND t.`name` = team_name
		AND s.speed > (		
			SELECT
				AVG(sk.`speed`)
			FROM
				`players` AS pl
			LEFT JOIN
				`skills_data` AS sk
				ON pl.`skills_data_id` = sk.`id`
			GROUP BY
				pl.`id`
			LIMIT 1
		)
	ORDER BY
		s.`speed` DESC
	LIMIT 1;
END $$

--CALL udp_find_playmaker (20, 'Skyble');
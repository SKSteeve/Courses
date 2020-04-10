
USE `fsd`;

SELECT
	t.`name` AS `team_name`,
	t.`established`,
	t.`fan_base`,
	(
		SELECT
			COUNT(pl.`team_id`)
		FROM
			`players` AS pl
		WHERE
			p.`team_id` = pl.`team_id`
	) AS `players_count`
FROM
	`teams` AS t
LEFT JOIN
	`players` AS p
	ON	t.`id` = p.`team_id`
GROUP BY
	t.`id`
ORDER BY
	`players_count` DESC,
	t.`fan_base` DESC;
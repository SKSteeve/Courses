
USE `fsd`;

SELECT
	MAX(sk.`speed`) AS `max_speed`,
	tw.`name` AS `town_name`
FROM
	`skills_data` AS sk
JOIN
	`players` AS p
	ON sk.`id` = p.`skills_data_id`
JOIN
	`teams` AS t
	ON p.`team_id` = t.`id`
JOIN
	`stadiums` AS st
	ON t.`stadium_id` = st.`id`
RIGHT JOIN
	`towns` AS tw
	ON st.`town_id` = tw.`id`
WHERE
	p.`team_id` != 99
GROUP BY
	tw.`id`
ORDER BY
	`max_speed` DESC,
	`town_name`
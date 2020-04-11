
USE `fsd`;

SELECT
	c.`name`,
	COUNT(p.id) AS `total_count_of_players`,
	SUM(p.salary) AS `total_sum_of_salaries`
FROM
	`players` AS p
JOIN
	`teams` AS t
	ON p.`team_id` = t.`id`
JOIN
	`stadiums` AS st
	ON t.`stadium_id` = st.`id`
JOIN
	`towns` AS tw
	ON st.`town_id` = tw.`id`
RIGHT JOIN
	`countries` AS c
	ON tw.`country_id` = c.id
GROUP BY
	c.`name`
ORDER BY
	`total_count_of_players` DESC,
	`name` ASC;
USE `soft_uni`;

SELECT
	employees.employee_id,
	first_name,
	IF(projects.start_date >= '2005-01-01', NULL, projects.name)
FROM
	employees
JOIN 
	employees_projects ON employees.employee_id = employees_projects.employee_id
JOIN 
	projects ON employees_projects.project_id = projects.project_id
WHERE 
	employees.employee_id = 24
ORDER BY 
	projects.name
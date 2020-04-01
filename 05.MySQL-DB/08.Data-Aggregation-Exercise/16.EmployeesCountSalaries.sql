
USE `soft_uni`;

SELECT 
   COUNT(`salary`)
FROM
   `employees`
WHERE
   ISNULL(`manager_id`);

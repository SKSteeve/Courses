<?php

class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $salary;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $department;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $age;

    public function __construct( string $name, float $salary, string $position, string $department, string $email = null, int $age = null)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }


}

$n = intval(readline());

$employees = [];
for($i = 0; $i < $n; $i++)
{
    $vars = explode(' ', readline());
    list($name, $salary, $position, $department) = $vars;
    $email = 'n/a';
    $age = -1;
    if(isset($vars[4])) {
        if(filter_var($vars[4], FILTER_VALIDATE_EMAIL)) {
            $email = $vars[4];
            if (isset($vars[5])) {
                $age = $vars[5];
            }
        }
        else {
            $age = $vars[4];
        }
    }

    $employee = new Employee($name, $salary, $position, $department, $email, $age);
    $employees[] = $employee;
}


$departmentsAndSalarySum = [];
$departmentsAndEmployeeCount = [];
/**
 * @var Employee $employees
 */
foreach($employees as $employee) {
    if(!key_exists($employee->getDepartment(), $departmentsAndSalarySum)) {
        $departmentsAndSalarySum[$employee->getDepartment()] = $employee->getSalary();
        $departmentsAndEmployeeCount[$employee->getDepartment()] = 1;
    }
    else {
        $departmentsAndSalarySum[$employee->getDepartment()] += $employee->getSalary();
        $departmentsAndEmployeeCount[$employee->getDepartment()] += 1;
    }
}

$departmentsAndAvgSalaries = [];
foreach ($departmentsAndSalarySum as $department => $salarySum) {
    $departmentsAndAvgSalaries[$department] = $salarySum / $departmentsAndEmployeeCount[$department];
}
arsort($departmentsAndAvgSalaries);

usort($employees, function (Employee $e1, Employee $e2){
    $salary1 = $e1->getSalary();
    $salary2 = $e2->getSalary();
    return $salary2 <=> $salary1;
});

foreach ($departmentsAndAvgSalaries as $departmentName => $avgSalary)
{
    echo "Highest Average Salary: $departmentName" . PHP_EOL;

    foreach ($employees as $employee) {
        if($employee->getDepartment() == $departmentName) {
            echo "{$employee->getName()} ". number_format($employee->getSalary(), 2, '.', '') . " {$employee->getEmail()} {$employee->getAge()}" . PHP_EOL;
        }
    }
    return;
}

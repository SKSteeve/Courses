<?php

class Human
{
    private $firstName;
    private $lastName;

    /**
     * Human constructor.
     * @param $firstName
     * @param $lastName
     * @throws Exception
     */
    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @param $firstName
     * @throws Exception
     */
    private function setFirstName($firstName)
    {
        if(!ctype_upper($firstName[0])) {
            throw new Exception("Expected upper case letter!Argument: firstName");
        }

        if(strlen($firstName) < 4) {
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
        $this->firstName = $firstName;
    }

    /**
     * @param $lastName
     * @throws Exception
     */
    protected function setLastName($lastName)
    {
        if(!ctype_upper($lastName[0])) {
            throw new Exception("Expected upper case letter!Argument: lastName");
        }

        if(strlen($lastName) < 3) {
            throw new Exception("Expected length at least 3 symbols!Argument: lastName");
        }

        $this->lastName = $lastName;
    }

    protected function getFirstName()
    {
        return $this->firstName;
    }

    protected function getLastName()
    {
        return $this->lastName;
    }
}

class Worker extends Human
{
    private $weekSalary;
    private $workHoursPerDay;

    public function __construct($firstName, $lastName, $salary, $workingHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setWeekSalary($salary);
        $this->setWorkHoursPerDay($workingHoursPerDay);
    }

    protected function setLastName($lastName)
    {
        if(strlen($lastName) <= 3) {
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        parent::setLastName($lastName);
    }

    /**
     * @param $weekSalary
     * @throws Exception
     */
    private function setWeekSalary($weekSalary)
    {
        if($weekSalary <= 10) {
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->weekSalary = $weekSalary;
    }

    /**
     * @param $workHours
     * @throws Exception
     */
    private function setWorkHoursPerDay($workHours)
    {
        if($workHours < 1 || $workHours > 12) {
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->workHoursPerDay = $workHours;
    }

    private function getWeekSalary()
    {
        return number_format($this->weekSalary, 2, '.', '');
    }

    private function getWorkHoursPerDay()
    {
        return number_format($this->workHoursPerDay, 2, '.', '');
    }

    private function getSalaryPerHour()
    {
        return number_format($this->getWeekSalary() / ($this->getWorkHoursPerDay() * 7), 2, '.', '');
    }

    public function __toString()
    {
        return "First Name: {$this->getFirstName()}" . PHP_EOL .
                "Last Name: {$this->getLastName()}" . PHP_EOL .
                "Week Salary: {$this->getWeekSalary()}" . PHP_EOL .
                "Hours per day: {$this->getWorkHoursPerDay()}" . PHP_EOL .
                "Salary per hour: {$this->getSalaryPerHour()}";
    }
}

class Student extends Human
{
    private $facNumber;

    public function __construct($firstName, $lastName, $facNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacNumber($facNumber);
    }

    /**
     * @param $facNum
     * @throws Exception
     */
    private function setFacNumber($facNum)
    {
        if(strlen($facNum) < 5 || strlen($facNum) > 10) {
            throw new Exception("Invalid faculty number!");
        }

        $this->facNumber = $facNum;
    }

    public function getFacNumber()
    {
        return $this->facNumber;
    }

    public function __toString()
    {
        return "First Name: {$this->getFirstName()}" . PHP_EOL .
                "Last Name: {$this->getLastName()}" . PHP_EOL .
                "Faculty number: {$this->getFacNumber()}" . PHP_EOL . PHP_EOL;
    }
}

$studentData = explode(' ', readline());
list($sName, $sLastName, $facNumber) = $studentData;

$workerData = explode(' ', readline());
list($name, $lastName, $weekSalary, $hoursPerDay) = $workerData;

try {
    $student = new Student($sName, $sLastName, $facNumber);
    echo $student;
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}

try {
    $worker = new Worker($name, $lastName, $weekSalary, $hoursPerDay);
    echo $worker;
} catch (Exception $ex) {
    echo $ex->getMessage();
}

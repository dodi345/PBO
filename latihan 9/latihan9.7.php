<?php
// polymorphism

use Employee as GlobalEmployee;

class Employee{
    private $first_name;
    private $last_name;
    private $age;

    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name= $first_name;
        $this->last_name=$last_name;
        $this->age=$age;
    }

    public function getFirstname(){
        return $this->first_name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getAge(){
        return $this->age;
    }
}

$objEmployeeOne = new GlobalEmployee('Bob','Smith',30);

print $objEmployeeOne->getFirstname();
print $objEmployeeOne->getLastName();
print $objEmployeeOne->getAge();

$objEmployeeTwo = new GlobalEmployee('John','Smith',34);
print $objEmployeeTwo->getFirstname();
print $objEmployeeTwo->getLastName();
print $objEmployeeTwo->getAge();

$objEmployeeThree = new GlobalEmployee('Dodi','Sopandi',21);

print $objEmployeeThree->getFirstname();
print $objEmployeeThree->getLastName();
print $objEmployeeThree->getAge();
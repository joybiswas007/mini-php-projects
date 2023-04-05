<?php

abstract class University 
{
    private $universityName;
    private $licenseNo;

    public function getUniversityName() 
    {
        return $this->universityName;
    }
    public function setUniversityName($universityName) 
    {
        $this->universityName = $universityName;
    }
    public function getLicenseNo() 
    {
        return $this->licenseNo;
    }
    public function setLicenseNo($licenseNo) 
    {
        $this->licenseNo = $licenseNo;
    }
}

class Student extends University 
{
    private $id;
    private $name;
    private $department;

    public function __construct($id, $name, $department)
    {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->universityName = $this->setUniversityName($this->getUniversityName());
        $this->licenseNo = $this->setLicenseNo($this->getLicenseNo());
    }

    public function printUniversityDetails() 
    {
        echo "University Name: " . $this->getUniversityName() . PHP_EOL;
        echo "License: " . $this->getLicenseNo() . PHP_EOL;
    }

    public function printStudentDetails() 
    {
        echo "Student ID: " . $this->id . PHP_EOL;
        echo "Student Name: " . $this->name . PHP_EOL;
        echo "Department: " . $this->department . PHP_EOL;
    }
}

$student1 = new Student(101, "Peter", "CSE");
$student1->setUniversityName("MIT");
$student1->setLicenseNo("ABC123");
$student1->printUniversityDetails();
$student1->printStudentDetails();
<?php
class University
{
    protected $universityName;
    protected $licenseNo;

    public function __construct($universityName, $licenseNo) 
    {
        $this->universityName = $universityName;
        $this->licenseNo = $licenseNo;
    }

    public function printUniversityDetails() 
    {
        echo "University Name: " . $this->universityName . PHP_EOL;
        echo "License No: " . $this->licenseNo . PHP_EOL;
    }
}

class Student extends University 
{
    protected $id;
    protected $name;
    protected $department;

    public function __construct($id, $name, $department, University $university) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->universityName = $university->universityName;
        $this->licenseNo = $university->licenseNo;
    }

    public function printStudentDetails() 
    {
        echo "Student ID: " . $this->id . PHP_EOL;
        echo "Student Name: " . $this->name . PHP_EOL;
        echo "Department: " . $this->department . PHP_EOL;
    }
}

$uni1 = new University("MIT", "ABC123");
$student1 = new Student(101, "Peter", "CSE", $uni1);
$student1->printUniversityDetails();
$student1->printStudentDetails();
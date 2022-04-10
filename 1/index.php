<?php
include "Student.php";

$student1 = new Student();
$student1->setNim("2003941");
$student1->setName("Novaldi Sandi Ago");
$student1->setGender("Male");
$student1->setProgram("Computer Science");
$student1->setSemester("4");

$student2 = new Student("2021027", "Raiden Shogun", "Female", "Electrical Engineering");

$student1->showStudent();
echo "<br>";
$student2->showStudent();
?>
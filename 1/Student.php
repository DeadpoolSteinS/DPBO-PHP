<?php
class Student
{
    // NIM, Nama, Jenis Kelamin, Program Studi, Semester
    private $nim;
    private $name;
    private $gender;
    private $program;
    private $semester;

    // set default data
    public function __construct($nim = "-", $name = "-", $gender = "-", $program = "-", $semester = "-")
    {
        $this->nim = $nim;
        $this->name = $name;
        $this->gender = $gender;
        $this->program = $program;
        $this->semester = $semester;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setProgram($program)
    {
        $this->program = $program;
    }

    public function getProgram()
    {
        return $this->program;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester()
    {
        return $this->semester;
    }

    public function showStudent()
    {
        echo "NIM      : " . $this->getNim() . "<br>";
        echo "Name     : " . $this->getName() . "<br>";
        echo "Gender   : " . $this->getGender() . "<br>";
        echo "Program  : " . $this->getProgram() . "<br>";
        echo "Semester : " . $this->getSemester() . "<br>";
    }
}
?>
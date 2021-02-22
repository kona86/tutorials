<?php
class Student
{
    var $name;
    var $major;
    var $gpa;
    function __construct($name, $major, $gpa)
    {
        $this->name = $name;
        $this->major=$major;
        $this->gpa=$gpa;
    }
    function hasHonours(){
        if($this->gpa >=3.5 ){
            return "true";
        }
        return "false";
    }
}
$student1 = new Student("Jim","Computer Science",2.4);
$student2 = new Student("Pam","Art",3.7);

echo $student1->hasHonours();
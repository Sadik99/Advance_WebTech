<?php

class student
{
	public $name;
	public $id;
	public $dob;
	public $courses=[];
	function AddCourse($coursename)
	{
		$this->courses[]=$coursename;
	}
	function ShowInfo()
	{
		echo "Name : $this->name";
		echo "<br>";
		echo "ID : $this->id";
		echo "<br>";
		echo "DOB : $this->dob";
		echo "<br>";
	}
	function ShowAllCourses()
	{
		echo"Name : $this->name";
		echo "<br>";
		echo "ID : $this->id";
		echo "<br>";
		echo "Courses of the student: <br>";
		foreach ($this->courses as $c) {
			echo $c;
			echo "<br>";
		}
	}
	
}



$s1=new student();
$s1->name="sadik";
$s1->id="1234";
$s1->dob="11-01-99";
$s1->AddCourse("PL1");
$s1->AddCourse("APIWT");
$s1->ShowInfo();

$s1->ShowAllCourses();

echo "<br>";

$s2=new student();

$s2->name="Rahim";
$s2->id="4321";
$s2->dob="12-12-97";
$s2->AddCourse("PL2");
$s2->AddCourse("Data Structure");
$s2->AddCourse("Math 3");

$s2->ShowInfo();
$s2->ShowAllCourses();


<?php


class student
{
	public $name;
	public $id;
	public $dob;
	public $courses=[];
	function AddCourse($coursename)
	{
		$this->courses[]=$coursename;
	}
	function ShowInfo()
	{
		echo "Name : $this->name";
		echo "<br>";
		echo "ID : $this->id";
		echo "<br>";
		echo "DOB : $this->dob";
		echo "<br>";
	}
	function ShowAllCourses()
	{
		echo"Name : $this->name";
		echo "<br>";
		echo "ID : $this->id";
		echo "<br>";
		echo "Courses of the student: <br>";
		foreach ($this->courses as $c) {
			echo $c;
			echo "<br>";
		}
	}
	
}



$s1=new student();
$s1->name="sadik";
$s1->id="1234";
$s1->dob="11-01-99";
$s1->AddCourse("PL1");
$s1->AddCourse("APIWT");
$s1->ShowInfo();

$s1->ShowAllCourses();

echo "<br>";

$s2=new student();

$s2->name="Rahim";
$s2->id="4321";
$s2->dob="12-12-97";
$s2->AddCourse("PL2");
$s2->AddCourse("Data Structure");
$s2->AddCourse("Math 3");

$s2->ShowInfo();
$s2->ShowAllCourses();

?>
<?php
class Person
{
    private $fname;
    private $lname;
    public function __construct($fname,$course)
    {
        echo "initializing the object<br>";
        $this->fname=$fname;
        $this->course=$course;
    }
    public function __destruct()
    {
        echo "destroying the object";
    }
    public function showname()
    {
        echo "my name is" .$this->fname. "<br> studying in".$this->course ."<br>";
    }
}
$student=new Person('yaseen','bca');
$student->showname()
?>
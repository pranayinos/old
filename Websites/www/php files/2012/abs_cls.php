<?php
class Employee 
{
    private $title;
    private $lastName;
    private $firstName;
    protected $salary;
    public function __construct($title, $firstName, $mainName, $salary ) 
    { 
        $this->title     = $title;
        $this->firstName = $firstName;
        $this->lastName  = $mainName;
        $this->salary     = $salary;
    }

public function firstName() 
    {
        return $this->firstName;
    }

    public function getlastName() 
    {
        return $this->lastName;
    }
   
    public function getTitle() 
    {
        return $this->title;
    }

    public function getSalary() 
    {
        return ($this->salary);
    }

    public function getFullName() 
    {
        return "{$this->firstName}" . " {$this->lastName}";
    }

    function getSummaryLine() {
        $base  = "$this->title ( $this->lastName, ";
        $base .= "$this->firstName )"; 
        return $base;
    }
}
abstract class EmployeeWriter 
{
    abstract static function write( Employee $shopProduct );
}
class TextEmployeeWriter extends EmployeeWriter 
{
    static function write(Employee $shopEmployee ) 
    {
        $str  = "{$shopEmployee->getTitle()}: ";   
        $str .= $shopEmployee->getFullName();
        $str .= " ({$shopEmployee->getSalary()})<br>";
        print $str;
    }
}
$developer1 = new Employee("Java", "Rakesh", "Gupta", 40000 );
TextEmployeeWriter::write($developer1);

?>

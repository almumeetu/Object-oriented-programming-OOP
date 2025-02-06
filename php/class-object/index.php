<?php

class OOP {
    public $name;
    public $designation;
    public $age;

    // Constructor to initialize object properties
    function __construct($name, $designation, $age){
        $this->name = $name;
        $this->designation = $designation;
        $this->age = $age;
    }

    // A method that returns a message
    public function myDetails() {
        return "My Name :" . $this->name . "<br>" . "My Designation : " . $this->designation . "<br>" . "My Age :" . $this->age . " ." ;
    }

}

$learnOOP = new OOP("Al Mumeetu Saikat", "Associate Software Developer", "22");
$learnOOPp = new OOP("Linkon", "Software Developer", "25");
$advance = $learnOOP->myDetails();
$advancee = $learnOOPp->myDetails();
echo $advance;
echo '<br>';
echo $advancee;

class saikat extends OOP {
    public $company;

    function __construct($name, $designation, $age, $company) {
        parent::__construct($name, $designation, $age);
        
    }

    public function all(){
        return "My Name :" . $this->name . "<br>" . "My Designation : " . $this->designation . "<br>" . "My Age :" . $this->age . " <br>". "My company name: " . $this->company . " ";
    }
}

$learnOOPPPP = new saikat("Al Mumeetu SHIHAB", "Associate Software Developer", "22", "SOFTZINO");
$update = $learnOOPPPP -> all();
echo '<br>';
echo $update;

echo '<br>';



class pusshi{
    public $helloo;
    public $color;
    public $work;

    function __construct($helloo, $color, $work){
        $this->helloo = $helloo;
        $this->color = $color;
        $this->work = $work;
    }

    public function catDetails(){
        return "My Cat Name Is " . " " . $this->helloo . "." . " My Cats color is " . $this->color . " . " . "Pushi is" . " ". $this->work . " now";
    }
}

$example = new pusshi("Hasina", "white", "eating");
$finalResult = $example->catDetails();
echo $finalResult;
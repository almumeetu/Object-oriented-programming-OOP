<?php include "inc/header.php"; ?>


<?php

class man {
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function info() {
        return $this->name . " is my Brother" . "<br>" . " and he is " . $this->age . " years old.";
    }
}

$shihab = new man("Al Muheetu Shihab", "23");
echo $shihab-> info();



echo "<br>";

//Php Advance Example
class Person {
    public $name;
    public $age;
    public $email;
    public $location;
    public $skills = [];

    // Constructor with default & required parameters
    function __construct(string $name, int $age, string $email = "not_provided@example.com", string $location = "Unknown") {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->location = $location;
    }

    // Method to add skills dynamically
    function addSkill($skill) {
        $this->skills[] = $skill;
    }

    // Method to return full information
    function getProfile() {
        $profile = "Name: " . $this->name . "<br>";
        $profile .= "Age: " . $this->age . "<br>";
        $profile .= "Email: " . $this->email . "<br>";
        $profile .= "Location: " . $this->location . "<br>";

        if (!empty($this->skills)) {
            $profile .= "Skills: " . implode(", ", $this->skills) . "<br>";
        } else {
            $profile .= "Skills: No skills added yet.<br>";
        }

        return $profile;
    }
}

// Create Object with all parameters
$saikat = new Person("Saikat Hossain", 25, "saikat@example.com", "Uttara, Dhaka");
$saikat->addSkill("PHP");
$saikat->addSkill("JavaScript");
$saikat->addSkill("Elementor Expert");


echo $saikat->getProfile();

echo "<hr>";

// Create Object with only required parameters (email and location are optional)
$shihab = new Person("Shihab", 23);
echo $shihab->getProfile();





?>

<?php include "inc/footer.php"; ?>
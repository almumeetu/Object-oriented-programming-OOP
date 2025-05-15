<?php include "inc/header.php"; ?>


<?php

echo "<h1>Hii There!</h1>";


echo "<br>";



//Basic Example

//Class
class man {

    // Property/Variable

    public $name = "Al Mumeetu Saikat";
    public $age = "23";

    // Method/Function

    function inFo() {
        return "Hi! I'm Al Mumeetu Saikat";
    }
}

// New man(); object

$saikat = New man();
echo "saikat -> name: " . $saikat -> name;
echo "<br>";
echo "<br>";
echo "saikat -> age: " . $saikat -> age;
echo "<br>";
echo "<br>";
echo "saikat -> inFo(): " . $saikat -> inFo();
echo "<br>";
echo "<br>";



// Create multiple objects using a class (BluePrint) and assign values dynamically.

class twoMan {

    // Property/Variable

    public $name;
    public $fName;
    public $name2;
    public $age;
    public $address;

    // Method/Function

    function inFo2() {
        $this->age = "28";
        return "Hi! I'm " . $this->name2 . "<br>" .
        "I am ". $this->age . " years old";
        
    }

    function inFoWithArguments($fName,$age,$address) {

        $this->fname = $fName;
        $this->age = $age;
        $this->address = $address;

        return "My Name is ". $this->fname . "<br>" . "I'm " .  $this->age . "years old. I live in " . $this->address ;
    }
}

// New man(); object

//obj-01
$shihab = New twoMan();
$shihab->name = "Oject-01: Al Muheetu Shihab";
echo $shihab -> name;
echo "<br>";

// Obj-02
$shazzad = new twoMan();
$shazzad->age = "Oject-02: 27";
echo $shazzad -> age ;
echo "<br>";

// Obj-03
$hazrath = new twoMan();
$hazrath->name2 = "Object-03: Md Hazrath Ali.";
echo $hazrath->inFo2();
echo "<br>";
echo $hazrath->inFoWithArguments("Saikat", "22", "Uttara"); //inFoWith Arguments


?>

<?php include "inc/footer.php"; ?>
<?php include "inc/header.php"; ?>


<?php

class man {
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct() {
    echo "Object destroyed!" . "<br>";
}
    function info() {
        return $this->name . " is my Brother" . "<br>" . " and he is " . $this->age . " years old.";
    }
}

$shihab = new man("Al Muheetu Shihab", "23");
echo $shihab-> info();



echo "<br>";




?>

<?php include "inc/footer.php"; ?>
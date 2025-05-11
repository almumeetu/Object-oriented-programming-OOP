<?php include "inc/header.php"; ?>


<?php



echo "Class, Property, Method and Object";
echo "<br>";
echo "Hello Success!";
echo "<br>";

class person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this-> name = $name;
        $this-> age = $age;
    }

    function saikatDetails() {
        return "My Name :" . $this->name . "<br>" . "My Age is" . $this->age . ".";
    }
}

$myDetails = new person("Al Mumeetu Saikat","23");
$myDetailsResult = $myDetails-> saikatDetails();
echo $myDetailsResult;


echo "<br>";
echo "My Second Class";
echo "<br>";


class myFrindInfo {
    public $myFriendName;
    public $myFriendDeg;

    function __construct($myFriendName, $myFriendDeg) {
        $this-> myFriendName = $myFriendName;
        $this-> myFriendDeg = $myFriendDeg;
    }


    public function allInfo(){
        return $this->myFriendName . "is Working on" . " " . $this->myFriendDeg . "." . "</br>";
    }
}

$shazzadResult = new myFrindInfo ("Shazzad Hossain", "Software");
$finalResult = $shazzadResult-> allInfo();
$ibrahimResult = new myFrindInfo("Ibrahim Hossain","Digital Marketing");
$finalResult2 = $ibrahimResult-> allInfo();
echo "$finalResult";
echo "<br>";
echo "$finalResult2";



?>

<?php include "inc/footer.php"; ?>
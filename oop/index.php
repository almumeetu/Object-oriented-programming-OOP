<?php include "inc/header.php"; ?>


<?php



echo "Class, Property, Method and Object";
echo "<br>";
echo "Hello Success!";
echo "<br>";

// First Class
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

// Second Class (With Constructor)
class myFriendInfo {
    public $myFriendName = "Shihab";
    public $myFriendDeg = "Android Developer";

    public function __construct($myFriendName, $myFriendDeg) {
        $this->myFriendName = $myFriendName;
        $this->myFriendDeg = $myFriendDeg;
    }

    public function allInfo() {
        return $this->myFriendName . " is working as " . $this->myFriendDeg . "." . "<br>";
    }
}


// $shazzadResult = new myFrindInfo ("Shazzad Hossain", "Software");
// $finalResult = $shazzadResult-> allInfo();
// $ibrahimResult = new myFrindInfo("Ibrahim Hossain","Digital Marketing");
// $finalResult2 = $ibrahimResult-> allInfo();
// echo "$finalResult";
// echo "<br>";
// echo "$finalResult2";

// Object creation and output (outside the class)
$shihabResult = new myFriendInfo("Shihab", "Android Developer");
$shihabResult2 = new myFriendInfo("Saikat", "WordPress Developer");
$shihabFinalResult = $shihabResult->allInfo();
$saikatFinalResult = $shihabResult2->allInfo();
echo $shihabFinalResult;
echo "<br>";
echo $saikatFinalResult;


// Second Class (Without Constructor)
class myFrindInfowithoutConstructor {
    public $myFriendName = "Shihab";
    public $myFriendDeg = "Android Developer";

    public function allInfo() {
        return $this->myFriendName . " is working as " . $this->myFriendDeg . "." . "<br>";
    }
}

$nowResult = new myFrindInfowithoutConstructor();
echo "<br>";
echo "Without Constructor";
echo "<br>";
echo $nowResult->allInfo();
echo "<br>";
?>

<?php include "inc/footer.php"; ?>
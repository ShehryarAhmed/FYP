<html>
<body>

<?php
$zeeshan = "Khan";

$y = 7;

$bool = true;
var_dump($bool);

$names  = array("Asher","zeeshan","Shehryar",12);

var_dump($names);
echo "<br>";
function myfunct(){
	static $a = 5;
	return "b nv";
		;
}
myfunct();
myfunct();
echo " My first PHP script! ";

print $y + $y;

class Student{
	public  $ss = "ali";
	function Student($s){
	$this->name = "$s";
	}}
	$nhustudent = new Student("helloAher");

	echo $nhustudent->name;

	echo $nhustudent->ss;
echo strpos("Zeeshan Asher","Asher");
echo str_replace("world", "Dolly", "Hello dasd!");
 define("stD", "khan");
 echo stD;
 function doss(){
 	echo stD;
 }
 doss();
 $favcolor = 11;

switch ($favcolor) {
    case 11:
        echo "Your favorite color is red!";
        break;
         case 12:
        echo "Your favorite color is red!";
        break;
        default:
        echo "dsadad";
}
        $age = array("Asher"=>"25", "Zeeshan"=>"17", "Shehryar"=>"23");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>


</body>
</html>
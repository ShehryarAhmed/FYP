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
	echo "".++$a;
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
?>

</body>
</html>
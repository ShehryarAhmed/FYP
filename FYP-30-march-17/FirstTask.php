<html>
<body>

<?php
$zeeshan = "Khan";

$y = 'das';

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
?>

</body>
</html>
<html>
<body>

<?php
$zeeshan = "Khan";

$y = 'das';
var_dump($y);
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
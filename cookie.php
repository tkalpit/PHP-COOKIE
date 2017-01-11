<?php
$name="kalpittandon";
$age="20";
setcookie($name,$age,time()+(86400*1),"/");
?>

<?php
if(isset($_COOKIE[$name]))
{
	echo "COOkie " .$name. " is set<br>";
	echo "Age is ".$age;
}
else
{
	echo "COOkie is not set";
}?>
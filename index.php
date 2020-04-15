<?php

if(isset($_POST["name"]))
{
	$var = $_POST["name"];
}
else
{
	$var = array
	(
		array('B7R', 2222, 6),
		array('BMX', 788, 8),
		array('AUDI', 543, 2),
		array('MME', 444, 4)
	);
}
$var2 = "<html>
<body>
<form action='http://localhost/lessons/index.php' method='POST'>
	<input type='text' name='name'> <br/>
	<input type='submit' name='submit'>
</form>
</body>
</html>";

foreach ($var as $index)
{
	foreach($index as $value)
	{
		echo $value." ";
	}
	echo "<br>";
}
print_r($var);
echo $var2;
?>
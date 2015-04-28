<?php
if ($_POST["submit"] !== "OK" || $_POST['oldpw'] === NULL || $_POST['newpw'] === NULL || $_POST['oldpw'] === "" || $_POST['newpw'] === "")
{
	echo "ERROR\n";
	exit (1);
}
$not_cereal = file_get_contents("../private/passwd");
$held = unserialize($not_cereal);
foreach ($held as $key => $data)
{
	if ($data['login'] === $_POST['login'])
	{
		$found = $key;
		break ;
	}
}
if ($found !== NULL)
{
	if ($held[$found]['passwd'] === hash(whirlpool, $_POST["oldpw"]))
	{
		$held[$found]['passwd'] = hash(whirlpool, $_POST["newpw"]);
		file_put_contents("../private/passwd", serialize($held));
		echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
	}
}
else
{
	echo "ERROR\n";
	exit (1);
}

?>
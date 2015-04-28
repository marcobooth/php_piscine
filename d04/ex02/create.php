<?php
if ($_POST["submit"] !== "OK")
{
	echo "ERROR\n";
	exit (1);
}
if (file_exists("../private") == 0)
{
	mkdir("../private");
}
if (!$_POST['login'] ||  !$_POST['passwd'])
{
	echo "ERROR\n";
	return ;
}
if (file_exists("../private/passwd") == 0)
{
	$cereal['login'] = $_POST["login"];
	$cereal['passwd'] = hash(whirlpool, $_POST["passwd"]);
	$hold[] = $cereal;
	file_put_contents("../private/passwd", serialize($hold));
	echo "OK\n";
}
else
{
	$not_cereal = file_get_contents("../private/passwd");
	$held = unserialize($not_cereal);
	foreach ($held as $data)
	{
		if ($data['login'] === $_POST['login'])
		{
			echo "ERROR\n";
			return ;
		}
	}
	$cereal['login'] = $_POST["login"];
	$cereal['passwd'] = hash(whirlpool, $_POST["passwd"]);
	$held[] = $cereal;
	file_put_contents("../private/passwd", serialize($held));
	echo "OK\n";
}


?>
#!/usr/bin/php
<?PHP
if ($argc != 2)
	exit(1);

$lower = strtolower($argv[1]);
$mod_op = explode(" ", $lower);
$filter = array_filter($mod_op);
$numbers = array_slice($filter, 0);
$counted = count($numbers);
if ($counted != 5)
{
	echo "Wrong Format\n";
	exit (1);
}
$day = $numbers[0];
$numbers[0]= preg_replace("/^lundi/", "Monday", $numbers[0]);
$numbers[0]= preg_replace("/^mardi/", "Tuesday", $numbers[0]);
$numbers[0]= preg_replace("/^mercredi/", "Wednesday", $numbers[0]);
$numbers[0]= preg_replace("/^jeudi/", "Thursday", $numbers[0]);
$numbers[0]= preg_replace("/^vendredi/", "Friday", $numbers[0]);
$numbers[0]= preg_replace("/^samedi/", "Saturday", $numbers[0]);
$numbers[0]= preg_replace("/^dimanche/", "Sunday", $numbers[0]);
if ($day === $numbers[0])
{
	echo "Wrong Format\n";
	exit (1);
}
array_shift($numbers);
$imploded = implode(" ", $numbers);

$imploded = preg_replace("/janvier/", 'January', $imploded);
$imploded = preg_replace('/fevrier/', 'February', $imploded);
$imploded = preg_replace('/mars/', 'March', $imploded);
$imploded = preg_replace('/avril/', 'April', $imploded);
$imploded = preg_replace('/mai/', 'May', $imploded);
$imploded = preg_replace('/juin/', 'June', $imploded);
$imploded = preg_replace('/juillet/', 'July', $imploded);
$imploded = preg_replace('/aout/', 'August', $imploded);
$imploded = preg_replace('/septembre/', 'September', $imploded);
$imploded = preg_replace('/octobre/', 'October', $imploded);
$imploded = preg_replace('/novembre/', 'November', $imploded);
$imploded = preg_replace('/decembre/', 'December', $imploded);

date_default_timezone_set("Europe/Paris");
if (strtotime($imploded) === FALSE)
{
	echo "Wrong Format\n";
	exit (1);
}
else
{
	echo(strtotime($imploded) . "\n");
}
?>
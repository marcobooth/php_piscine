#!/usr/bin/php
<?PHP
unset($argv[0]);
$implode = implode(" ", $argv);
$explode = explode(" ", $implode);
$filter = array_filter($explode);
asort($filter);
foreach ($filter as $key) {
	echo $key."\n";
}
?>
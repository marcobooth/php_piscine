#!/usr/bin/php
<?PHP
function ft_split($string)
{
	$hello = explode(" ", $string);
	$filter = array_filter($hello);
	$slice = array_slice($filter, 0);
	return($slice);
}

if ($argc == 2)
{
	$split = ft_split($argv[1]);
	$implode = implode(" ",$split);
	echo $implode."\n";
}
?>
<?PHP
function ft_split($string)
{
	$hello = explode(" ", $string);
	$filter = array_filter($hello);
	asort($filter);
	$slice = array_slice($filter, 0);
	return($slice);
}
?>
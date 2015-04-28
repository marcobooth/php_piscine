#!/usr/bin/php
<?PHP
while (1)
{
	echo "Entrez un nombre: ";
	$handle = fopen("php://stdin","r");
	$hold = fgets($handle);
	if ($hold == FALSE)
	{
	   echo "\n";
	   break;
	}
    $line = substr($hold, 0, -1);
	if (strlen($line) > 0 && is_numeric($line))
	{
		echo "Le chiffre ".$line." est ";
	    if ((int)substr($line, -1) % 2)
	    {
			echo "Impair";
	    }
	    else
	    {
			echo "Pair";
		}
	}
	else
	{
		echo "'$line' n'est pas un chiffre";
	}
	echo "\n";
}
?>
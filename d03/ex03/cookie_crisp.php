<?PHP
if ($_GET["action"] === "set")
{
	setcookie($_GET["name"], $_GET["value"], time() + 10000);
}
else if ($_GET["action"] === "get")
{
	if ($_COOKIE[$_GET["name"]] !== NULL)
	{
		echo $_COOKIE[$_GET["name"]]."\n"; #not backslash n if does not exist
	}
}
else if($_GET["action"] === "del")
{
	setcookie($_GET["name"], $_GET["value"], time() - 100000);
}
?>
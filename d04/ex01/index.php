<?php
session_start();
if ($_GET["submit"] === "OK")
{
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}
?>
<html>
<body>
<form>
Login:    <input name="login" type="text" value=<?php echo '"'.$_SESSION["login"].'"'; ?>> <br/>
Passwd: <input name="passwd" type="password" value=<?php echo '"'.$_SESSION["passwd"].'"'; ?>><br/>
<input name="submit" type="submit" value="OK">
</form>
</body>
</html>
<?PHP
include "auth.php";
session_start();
if (isset($_GET["login"], $_GET["passwd"]) && !empty($_GET["login"]) && !empty($_GET["passwd"]))
{
	if (auth($_GET["login"], $_GET["passwd"]))
	{
		$_SESSION["loggued_on_user"] = $_GET["login"];
		echo "OK\n";
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		echo "ERROR\n";
	}
}
else
{
	$_SESSION["loggued_on_user"] = "";
	echo "ERROR\n";
}
?>

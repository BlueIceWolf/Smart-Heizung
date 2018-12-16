<?php 
session_start();
if (!isset($_SESSION['user'], $_SESSION['pw']))
{
	echo '<b>Du musst dich erst <a href="index.php">hier</a> einloggen um in den Geschützen Bereich zu kommen!</b>';
	
}
if (isset($_SESSION['user'], $_SESSION['pw'])){
	
include("homeinhalt.php");
}

?>

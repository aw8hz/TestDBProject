<?php

include_once("../library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_insert = "INSERT INTO testPlayers (name, age) VALUES ('$_POST[name]','$_POST[age]')";

if (!mysqli_query($db_con,$sql_insert)){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record added";

mysqli_close($db_con);
?>

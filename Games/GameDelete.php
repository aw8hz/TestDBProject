<?php

//header("Location: ./GameStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_delete = "DELETE FROM game WHERE number ='" . $_POST['number'] . "';";

//echo $sql_delete;

if (!mysqli_query($db_con,$sql_delete)){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record deleted";

mysqli_close($db_con);
?>

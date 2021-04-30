<?php

header("Location: ./TeamStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_insert = "INSERT INTO team (name, home_city, wins, losses, overtime_losses, conference, division, coach, general_manager, stadium) VALUES ('$_POST[name]','$_POST[home_city]','$_POST[wins]','$_POST[losses]','$_POST[overtime_losses]','$_POST[conference]','$_POST[division]','$_POST[coach]','$_POST[general_manager]','$_POST[stadium]')";

if (!mysqli_query($db_con,$sql_insert)){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record added";

mysqli_close($db_con);
?>

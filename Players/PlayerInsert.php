<?php

header("Location: ./PlayerStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_insert = "INSERT INTO skater (name, number, position, team, goals, assists, plus_minus, salary, handedness, home_town, games_played, line_name) VALUES ('$_POST[name]','$_POST[number]','$_POST[position]','$_POST[team]','$_POST[goals]','$_POST[assists]','$_POST[plus_minus]','$_POST[salary]','$_POST[handedness]','$_POST[home_town]','$_POST[games_played]','$_POST[line_name]')";

if (!mysqli_query($db_con,$sql_insert)){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record added";

mysqli_close($db_con);
?>

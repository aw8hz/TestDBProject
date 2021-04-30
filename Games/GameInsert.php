<?php

header("Location: ./GameStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_insert = "INSERT INTO game (number, OT, shootout, home_team, away_team, home_goals, home_PIM, home_corsi, home_shots_on_net, home_missed_shots, away_goals, away_PIM, away_corsi, away_shots_on_net, away_missed_shots) VALUES ('$_POST[number]','$_POST[OT]','$_POST[shootout]','$_POST[home_team]','$_POST[away_team]','$_POST[home_goals]','$_POST[home_PIM]','$_POST[home_corsi]','$_POST[home_shots_on_net]','$_POST[home_missed_shots]','$_POST[away_goals]','$_POST[away_PIM]','$_POST[away_corsi]','$_POST[away_shots_on_net]','$_POST[away_missed_shots]')";

if (!mysqli_query($db_con,$sql_insert)){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record added";

mysqli_close($db_con);
?>
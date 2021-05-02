<?php

header("Location: ./PlayerStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_insert = $db_con->prepare("INSERT INTO skater (name, number, position, team, goals, assists, plus_minus, salary, handedness, home_town, games_played, line_name) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

$sql_insert->bind_param("sissiiiissis", $name, $number, $position, $team, $goals, $assists, $plus_minus, $salary, $handedness, $home_town, $games_played, $line_name);

$name = $_POST['name']; $number = $_POST['number']; $position = $_POST['position']; $team = $_POST['team']; $goals = $_POST['goals']; $assists = $_POST['assists']; $plus_minus = $_POST['plus_minus']; $salary = $_POST['salary']; $handedness = $_POST['handedness']; $home_town = $_POST['home_town']; $games_played = $_POST['games_played']; $line_name = $_POST['line_name'];

if (!$sql_insert->execute()){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record added";

$sql_insert->close();

mysqli_close($db_con);
?>

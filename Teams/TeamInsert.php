<?php

header("Location: ./TeamStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_insert = $db_con->prepare("INSERT INTO team (name, home_city, wins, losses, overtime_losses, conference, division, coach, general_manager, stadium) VALUES (?,?,?,?,?,?,?,?,?,?)");

$sql_insert->bind_param("ssiiisssss", $name, $home_city, $wins, $losses, $overtime_losses, $conference, $division, $coach, $general_manager, $stadium);

$name = $_POST['name'];
$home_city = $_POST['home_city'];
$wins = $_POST['wins'];
$losses = $_POST['losses'];
$overtime_losses = $_POST['overtime_losses'];
$conference = $_POST['conference'];
$division = $_POST['division'];
$coach = $_POST['coach'];
$general_manager = $_POST['general_manager'];
$stadium = $_POST['stadium'];

$sql_insert->execute();

echo "1 record added";

$sql_insert->close();

mysqli_close($db_con);
?>

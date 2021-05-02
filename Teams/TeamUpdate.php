<?php

header("Location: ./TeamStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$row_select = "SELECT * FROM team WHERE name='" . $_POST['name'] . "';";

echo $row_select;

$curr_row = mysqli_fetch_array(mysqli_query($db_con, $row_select));

print_r($curr_row);

print_r($_POST);

if (!$curr_row){
	die('error: ' . mysqli_error($db_con));
}

$sql_update = $db_con->prepare("UPDATE team SET home_city=?, wins=?, losses=?, overtime_losses=?, conference=?, division=?, coach=?, general_manager=?, stadium=? WHERE name=?");

$sql_update->bind_param("siiissssss", $home_city, $wins, $losses, $overtime_losses, $conference, $division, $coach, $general_manager, $stadium, $name);

$home_city = ($_POST['home_city'] ?: $curr_row['home_city']);
$wins = ($_POST['wins'] ?: $curr_row['wins']);
$losses = ($_POST['losses'] ?: $curr_row['losses']);
$overtime_losses = ($_POST['overtime_losses'] ?: $curr_row['overtime_losses']);
$conference = ($_POST['conference'] ?: $curr_row['conference']);
$division = ($_POST['division'] ?: $curr_row['division']);
$coach = ($_POST['coach'] ?: $curr_row['coach']);
$general_manager = ($_POST['general_manager'] ?: $curr_row['general_manager']);
$stadium = ($_POST['stadium'] ?: $curr_row['stadium']);
$name = ($_POST['name'] ?: $curr_row['name']);

$sql_update->execute();

echo "1 record updated";

$sql_update->close();

mysqli_close($db_con);
?>

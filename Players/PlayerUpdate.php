<?php

header("Location: ./PlayerStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$row_select = "SELECT * FROM skater WHERE name='" . $_POST['name'] . "';";

//echo $row_select;

$curr_row = mysqli_fetch_array(mysqli_query($db_con, $row_select));

//print_r($curr_row);

//print_r($_POST);

if (!$curr_row){
	die('Error: ' . mysqli_error($db_con));
}

$sql_update = $db_con->prepare("UPDATE skater SET number=?, position=?, team=?, goals=?, assists=?, plus_minus=?, salary=?, handedness=?, home_town=?, games_played=?, line_name=? WHERE name=?");

$sql_update->bind_param("issiiiississ", $number, $position, $team, $goals, $assists, $plus_minus, $salary, $handedness, $home_town, $games_played, $line_name, $name);

$number = ($_POST['number'] ?: $curr_row['number']);
$position = ($_POST['position'] ?: $curr_row['position']);
$team = ($_POST['team'] ?: $curr_row['team']);
$goals = ($_POST['goals'] ?: $curr_row['goals']);
$assists = ($_POST['assists'] ?: $curr_row['assists']);
$plus_minus = ($_POST['plus_minus'] ?: $curr_row['plus_minus']);
$salary = ($_POST['salary'] ?: $curr_row['salary']);
$handedness = ($_POST['handedness'] ?: $curr_row['handedness']);
$home_town = ($_POST['home_town'] ?: $curr_row['home_town']);
$games_played = ($_POST['games_played'] ?: $curr_row['games_played']);
$line_name = ($_POST['line_name'] ?: $curr_row['line_name']);
$name = ($_POST['name'] ?: $curr_row['name']);

$sql_update->execute();

echo "1 record updated";

$sql_update->close();

mysqli_close($db_con);
?>

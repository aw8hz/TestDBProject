<?php

header("Location: ./PlayerStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_update = "UPDATE skater SET ";
$sql_update .= ($_POST['number'] ? "number = '" . $_POST['number']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['position']) ? ", " : "") . ($_POST['position'] ? "position = '" . $_POST['position']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['team']) ? ", " : "") . ($_POST['team'] ? "team = '" . $_POST['team']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['goals']) ? ", " : "") . ($_POST['goals'] ? "goals = '" . $_POST['goals']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['assists']) ? ", " : "") . ($_POST['assists'] ? "assists = '" . $_POST['assists']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['plus_minus']) ? ", " : "") . ($_POST['plus_minus'] ? "plus_minus = '" . $_POST['plus_minus']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['salary']) ? ", " : "") . ($_POST['salary'] ? "salary = '" . $_POST['salary']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['handedness']) ? ", " : "") . ($_POST['handedness'] ? "handedness = '" . $_POST['handedness']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['home_town']) ? ", " : "") . ($_POST['home_town'] ? "home_town = '" . $_POST['home_town']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['games_played']) ? ", " : "") . ($_POST['games_played'] ? "games_played = '" . $_POST['games_played']."'" : "");
$sql_update .= (((strlen($sql_update) > 19) and $_POST['line_name']) ? ", " : "") . ($_POST['line_name'] ? "line_name = '" . $_POST['line_name']."'" : "");
$sql_update .= " WHERE name = '" . $_POST['name']."'";

//echo $sql_update;

if (!mysqli_query($db_con,$sql_update)){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record updated";

mysqli_close($db_con);
?>

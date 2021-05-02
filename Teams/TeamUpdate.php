<?php

header("Location: ./TeamStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_update = "UPDATE team SET ";
$sql_update .= ($_POST['home_city'] ? "home_city = '" . $_POST['home_city']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['games_played']) ? ", " : "") . ($_POST['games_played'] ? "games_played = '" . $_POST['games_played']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['wins']) ? ", " : "") . ($_POST['wins'] ? "wins = '" . $_POST['wins']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['losses']) ? ", " : "") . ($_POST['losses'] ? "losses = '" . $_POST['losses']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['overtime_losses']) ? ", " : "") . ($_POST['overtime_losses'] ? "overtime_losses = '" . $_POST['overtime_losses']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['conference']) ? ", " : "") . ($_POST['conference'] ? "conference = '" . $_POST['conference']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['division']) ? ", " : "") . ($_POST['division'] ? "division = '" . $_POST['division']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['coach']) ? ", " : "") . ($_POST['coach'] ? "coach = '" . $_POST['coach']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['general_manager']) ? ", " : "") . ($_POST['general_manager'] ? "general_manager = '" . $_POST['general_manager']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['stadium']) ? ", " : "") . ($_POST['stadium'] ? "stadium = '" . $_POST['stadium']."'" : "");
$sql_update .= " WHERE name = '" . $_POST['name']."';";

//echo $sql_update;

if (!mysqli_query($db_con,$sql_update)){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record updated";

mysqli_close($db_con);
?>

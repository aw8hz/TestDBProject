<?php

header("Location: ./GameStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_update = "UPDATE game SET ";
$sql_update .= ($_POST['OT'] ? "OT = '" . $_POST['OT']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['shootout']) ? ", " : "") . ($_POST['shootout'] ? "shootout = '" . $_POST['shootout']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['home_team']) ? ", " : "") . ($_POST['home_team'] ? "home_team = '" . $_POST['home_team']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['away_team']) ? ", " : "") . ($_POST['away_team'] ? "away_team = '" . $_POST['away_team']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['home_goals']) ? ", " : "") . ($_POST['home_goals'] ? "home_goals = '" . $_POST['home_goals']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['home_PIM']) ? ", " : "") . ($_POST['home_PIM'] ? "home_PIM = '" . $_POST['home_PIM']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['home_corsi']) ? ", " : "") . ($_POST['home_corsi'] ? "home_corsi = '" . $_POST['home_corsi']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['home_shots_on_net']) ? ", " : "") . ($_POST['home_shots_on_net'] ? "home_shots_on_net = '" . $_POST['home_shots_on_net']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['home_missed_shots']) ? ", " : "") . ($_POST['home_missed_shots'] ? "home_missed_shots = '" . $_POST['home_missed_shots']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['away_goals']) ? ", " : "") . ($_POST['away_goals'] ? "away_goals = '" . $_POST['away_goals']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['away_PIM']) ? ", " : "") . ($_POST['away_PIM'] ? "away_PIM = '" . $_POST['away_PIM']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['away_corsi']) ? ", " : "") . ($_POST['away_corsi'] ? "away_corsi = '" . $_POST['away_corsi']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['away_shots_on_net']) ? ", " : "") . ($_POST['away_shots_on_net'] ? "away_shots_on_net = '" . $_POST['away_shots_on_net']."'" : "");
$sql_update .= (((strlen($sql_update) > 16) and $_POST['away_missed_shots']) ? ", " : "") . ($_POST['away_missed_shots'] ? "away_missed_shots = '" . $_POST['away_missed_shots']."'" : "");
$sql_update .= " WHERE number = '" . $_POST['number']."';";

//echo $sql_update;

if (!mysqli_query($db_con,$sql_update)){
	die('Error: ' . mysqli_error($db_con));
}

echo "1 record updated";

mysqli_close($db_con);
?>

<?php

header("Location: ./GameStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//print_r($_POST);

$sql_insert = $db_con->prepare("INSERT INTO game (number, OT, shootout, home_team, away_team, home_goals, home_PIM, home_corsi, home_shots_on_net, home_missed_shots, away_goals, away_PIM, away_corsi, away_shots_on_net, away_missed_shots) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$sql_insert->bind_param("iiissiiiiiiiiii", $number, $OT, $shootout, $home_team, $away_team, $home_goals, $home_PIM, $home_corsi, $home_shots_on_net, $home_missed_shots, $away_goals, $away_PIM, $away_corsi, $away_shots_on_net, $away_missed_shots);

$number = $_POST['number'];
$OT = $_POST['OT'];
$shootout = $_POST['shootout'];
$home_team = $_POST['home_team'];
$away_team = $_POST['away_team'];
$home_goals = $_POST['home_goals'];
$home_PIM = $_POST['home_PIM'];
$home_corsi = $_POST['home_corsi'];
$home_shots_on_net = $_POST['home_shots_on_net'];
$home_missed_shots = $_POST['home_missed_shots'];
$away_goals = $_POST['away_goals'];
$away_PIM = $_POST['away_PIM'];
$away_corsi = $_POST['away_corsi'];
$away_shots_on_net = $_POST['away_shots_on_net'];
$away_missed_shots = $_POST['away_missed_shots'];

if(!$sql_insert->execute()){
	echo "insert failed";
	echo mysqli_error($db_con);
}else{
	echo "1 record added";
}

$sql_insert->close();

mysqli_close($db_con);
?>

<?php

header("Location: ./GameStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$row_select = "SELECT * FROM game WHERE number='" . $_POST['number'] . "';";

//echo $row_select;

$curr_row = mysqli_fetch_array(mysqli_query($db_con, $row_select));

//print_r($curr_row);

//print_r($_POST);

if (!$curr_row){
	die('Error: ' . mysqli_error($db_con));
}

$sql_update = $db_con->prepare("UPDATE game SET OT=?, shootout=?, home_team=?, away_team=?, home_goals=?, home_PIM=?, home_corsi=?, home_shots_on_net=?, home_missed_shots=?, away_goals=?, away_PIM=?, away_corsi=?, away_shots_on_net=?, away_missed_shots=? WHERE number=?");

$sql_update->bind_param("iissiiiiiiiiiii", $OT, $shootout, $home_team, $away_team, $home_goals, $home_PIM, $home_corsi, $home_shots_on_net, $home_missed_shots, $away_goals, $away_PIM, $away_corsi, $away_shots_on_net, $away_missed_shots, $number);

$OT = (strlen($_POST['OT']) ? $_POST['OT'] : $curr_row['OT']);
$shootout = (strlen($_POST['shootout']) ? $_POST['shootout'] : $curr_row['shootout']);
$home_team = ($_POST['home_team'] ?: $curr_row['home_team']);
$away_team = ($_POST['away_team'] ?: $curr_row['away_team']);
$home_goals = (strlen($_POST['home_goals']) ? $_POST['home_goals'] : $curr_row['home_goals']);
$home_PIM = (strlen($_POST['home_PIM']) ? $_POST['home_PIM'] : $curr_row['home_PIM']);
$home_corsi = (strlen($_POST['home_corsi']) ? $_POST['home_corsi'] : $curr_row['home_corsi']);
$home_shots_on_net = (strlen($_POST['home_shots_on_net']) ? $_POST['home_shots_on_net'] : $curr_row['home_shots_on_net']);
$home_missed_shots = (strlen($_POST['home_missed_shots']) ? $_POST['home_missed_shots'] : $curr_row['home_missed_shots']);
$away_goals = (strlen($_POST['away_goals']) ? $_POST['away_goals'] : $curr_row['away_goals']);
$away_PIM = (strlen($_POST['away_PIM']) ? $_POST['away_PIM'] : $curr_row['away_PIM']);
$away_corsi = (strlen($_POST['away_corsi']) ? $_POST['away_corsi'] : $curr_row['away_corsi']);
$away_shots_on_net = (strlen($_POST['away_shots_on_net']) ? $_POST['away_shots_on_net'] : $curr_row['away_shots_on_net']);
$away_missed_shots = (strlen($_POST['away_missed_shots']) ? $_POST['away_missed_shots'] : $curr_row['away_missed_shots']);
$number = ($_POST['number'] ?: $curr_row['number']);

//echo $sql_update;

if (!$sql_update->execute()){
	echo "Update failed.";
	echo mysqli_error($db_con);
}else{
	echo "1 record updated";
}

$sql_update->close();
mysqli_close($db_con);
?>

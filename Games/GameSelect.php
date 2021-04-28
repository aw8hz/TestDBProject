<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="./GameStyles.css">
	<title>Game Statistics</title>
</head>
<body>
<h2>Games</h2>

<form action="../Teams/TeamStats.html">
	<input type="submit" value="View Teams" />
</form>

<form action="../Players/PlayerStats.html">
	<input type="submit" value="View Players" />
</form>




<?php
	require_once('./library.php');
	$db_connection = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

	if (mysqli_connect_errno()) {
		echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
		return null;
	}

	$result = mysqli_query($db_connection, "SELECT * FROM game");

	echo"<table><tr><th>Number</th><th>OT</th><th>Shootout</th><th>Home Team</th><th>away team</th><th>Home Goals</th><th>home PIM</th><th>home corsi</th><th>home shots on net</th><th>home missed shots</th><th>away goals</th><th>away PIM</th><th>away corsi</th><th>away shots on net</th><th>away missed shots</th></tr>";

	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>" . $row['number'] . "</td>";
		echo "<td>" . $row['OT'] . "</td>";
		echo "<td>" . $row['shootout'] . "</td>";
		echo "<td>" . $row['home_team'] . "</td>";
		echo "<td>" . $row['away_team'] . "</td>";
		echo "<td>" . $row['home_goals'] . "</td>";
		echo "<td>" . $row['home_PIM'] . "</td>";
		echo "<td>" . $row['home_corsi'] . "</td>";
		echo "<td>" . $row['home_shots_on_net'] . "</td>";
		echo "<td>" . $row['home_missed_shots'] . "</td>";
		echo "<td>" . $row['away_goals'] . "</td>";
		echo "<td>" . $row['away_PIM'] . "</td>";
		echo "<td>" . $row['away_corsi'] . "</td>";
		echo "<td>" . $row['away_shots_on_net'] . "</td>";
		echo "<td>" . $row['away_missed_shots'] . "</td>";
		echo "</tr>";
	}

	mysqli_close($db_connection);
?>


</body>
</html>


(int number, bool OT, bool shootout, varchar home_team, varchar away_team, varchar home_goals, int home_PIM, float home_corsi, int home_shots_on_net, int home_missed_shots, int away_goals, int away_PIM, away_corsi, int away_shots_on_net, int away_missed_shots)
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./GameStyles.css">
	<title>Game Statistics</title>
	<script src="../js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
</head>
<body>

<h1>Game Stats</h1>

<table class="stats-table">
	<tr class="stats-table-row-heading">
		<th class="stats-table-heading">Number</th>
		<th class="stats-table-heading">OT</th>
		<th class="stats-table-heading">Shootout</th>
		<th class="stats-table-heading">Home Team</th>
		<th class="stats-table-heading">Away Team</th>
		<th class="stats-table-heading">Home Goals</th>
		<th class="stats-table-heading">Home PIM</th>
		<th class="stats-table-heading">Home Corsi</th>
		<th class="stats-table-heading">Home Shots On Net</th>
		<th class="stats-table-heading">Home Missed Shots</th>
		<th class="stats-table-heading">Away Goals</th>
		<th class="stats-table-heading">Away PIM</th>
		<th class="stats-table-heading">Away Corsi</th>
		<th class="stats-table-heading">Away Shots On Net</th>
		<th class="stats-table-heading">Away Missed Shots</th>
	</tr>
	<?php
		require_once('./library.php');
		$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

		if(mysqli_connect_errno()) {
			echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
			return null;
		}

		$result = mysqli_query($db_con, "SELECT * FROM game");

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

		mysqli_close($db_con);
	?>
</table>

<form action="./GameForm.html">
	<input type="submit" value="Add Another Game" />
</form>

<form action="../Player/PlayerStats.php">
	<input type="submit" value="View Players" />
</form>

<form action="../Teams/TeamStats.html">
	<input type="submit" value="View Teams">
</form>

</body>
</html>

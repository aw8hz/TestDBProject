<?php include('../BaseLayout/baseBegin.html'); ?>
<div class="container m-1" style="overflow-x: auto">
	<h1>Game Stats</h1>

	<table class="table" >
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
		    echo "<td>" . $row['number'] ?: '' . "</td>";
		    echo "<td>" . $row['OT'] . "</td>";
		    echo "<td>" . $row['shootout'] ?: '' . "</td>";
		    echo "<td>" . $row['home_team'] ?: '' . "</td>";
		    echo "<td>" . $row['away_team'] ?: '' . "</td>";
		    echo "<td>" . $row['home_goals'] ?: '' . "</td>";
		    echo "<td>" . $row['home_PIM'] ?: '' . "</td>";
		    echo "<td>" . $row['home_corsi'] ?: '' . "</td>";
		    echo "<td>" . $row['home_shots_on_net'] ?: '' . "</td>";
		    echo "<td>" . $row['home_missed_shots'] ?: '' . "</td>";
		    echo "<td>" . $row['away_goals'] ?: '' . "</td>";
		    echo "<td>" . $row['away_PIM'] ?: '' . "</td>";
		    echo "<td>" . $row['away_corsi'] ?: '' . "</td>";
		    echo "<td>" . $row['away_shots_on_net'] ?: '' . "</td>";
		    echo "<td>" . $row['away_missed_shots'] ?: '' . "</td>";
		    echo "<td class='stats-table-item'>
			    <form action='./GameUpdateForm.php' method='post'>
				<input type='hidden' name='number' value='" . $row['number'] . "' />
				<input type='submit' value='Update' />
			    </form>
			    </td>";
		    echo "<td class='stats-table-item'>
			    <form action='./GameDelete.php' method='post'>
				<input type='hidden' name='number' value='" . $row['number'] . "' />
				<input type='submit' value='Delete' />
			    </form>
			    </td>";
		    echo "</tr>";
		}

			mysqli_close($db_con);
		?>
	</table>
</div>
<div class="mb-3 d-flex flex-row">
	<form action="./GameForm.html" class="mr-1">
		<input type="submit" class="btn btn-primary" value="Add Another Game" />
	</form>

	<form action="../Players/PlayerStats.php" class="mr-1">
		<input type="submit" class="btn btn-secondary" value="View Players" />
	</form>

	<form action="../Teams/TeamStats.php">
		<input type="submit" class="btn btn-secondary" value="View Teams">
	</form>
</div>
<?php include('../BaseLayout/baseEnd.html'); ?>

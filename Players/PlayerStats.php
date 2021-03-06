<?php include('../BaseLayout/baseBegin.html'); ?>
<div class="container m-1" style="overflow-x:auto">
	<h1>Player Stats</h1>

	<table class="table table-striped table-bordered" id="StatsTable">
		<thead>
		<tr class="stats-table-row-heading">
			<th class="stats-table-heading">Name</th>
			<th class="stats-table-heading">Number</th>
			<th class="stats-table-heading">Position</th>
			<th class="stats-table-heading">Team</th>
			<th class="stats-table-heading">Goals</th>
			<th class="stats-table-heading">Assists</th>
			<th class="stats-table-heading">+/-</th>
			<th class="stats-table-heading">Salary</th>
			<th class="stats-table-heading">Handedness</th>
			<th class="stats-table-heading">Home Town</th>
			<th class="stats-table-heading">Games Played</th>
			<th class="stats-table-heading">Line Name</th>
			<th class="stats-table-heading">Update</th>
			<th class="stats-table-heading">Delete</th>
		</tr>
		</thead>
		<tbody>
		<?php
			require_once('./library.php');
			$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

			if(mysqli_connect_errno()) {
				echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
				return null;
			}

			$result = mysqli_query($db_con, "SELECT * FROM skater");

			while($row = mysqli_fetch_array($result)) {
				echo '<tr class="stats-table-row">';
				echo '<td class="stats-table-item">' . $row['name'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['number'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['position'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['team'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['goals'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['assists'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['plus_minus'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['salary'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['handedness'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['home_town'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['games_played'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['line_name'] ?: '' . '</td>';
				echo "<td class='stats-table-item'>
					<form action='./PlayerUpdateForm.php' method='post'>
						<input type='hidden' name='name' value='" . $row['name'] . "' />
						<input type='submit' value='Update' />
					</form>
					</td>";
				echo "<td class='stats-table-item'>
					<form action='./PlayerDelete.php' method='post'>
						<input type='hidden' name='name' value='" . $row['name'] . "' />
						<input type='submit' value='Delete' />
					</form>
					</td>";
				echo '</tr>';
			}

			mysqli_close($db_con);
		?>
		</tbody>
	</table>
</div>
<div class="mb-3 d-flex flex-row">
	<form action="./PlayerForm.html" class="mr-1">
		<input type="submit" class="btn btn-primary" value="Add Another Skater" />
	</form>

	<form action="../Games/GameStats.php" class="mr-1">
		<input type="submit" class="btn btn-secondary" value="View Games" />
	</form>

	<form action="../Teams/TeamStats.php" class="mr-1">
		<input type="submit" class="btn btn-secondary" value="View Teams">
	</form>
</div>

<script>
	$(document).ready(function() {
		$('#PlayersTable').DataTable();
	});
</script>

<?php include('../BaseLayout/baseEnd.html'); ?>

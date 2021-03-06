<?php include '../BaseLayout/baseBegin.html';?>
<div class="container m-1" style="overflow-x:auto">
	<h1>Team Stats</h1>

	<table class="table table-striped table-bordered" id="StatsTable">
		<thead>
		<tr class="stats-table-row-heading">
			<th class="stats-table-heading">Name</th>
			<th class="stats-table-heading">Home City</th>
			<th class="stats-table-heading">Games Played</th>
			<th class="stats-table-heading">Wins</th>
			<th class="stats-table-heading">Losses</th>
			<th class="stats-table-heading">Overtime Losses</th>
			<th class="stats-table-heading">Conference</th>
			<th class="stats-table-heading">Division</th>
			<th class="stats-table-heading">Coach</th>
			<th class="stats-table-heading">General Manager</th>
			<th class="stats-table-heading">Stadium</th>
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

			$result = mysqli_query($db_con, "SELECT * FROM team");

			while($row = mysqli_fetch_array($result)) {
				echo '<tr class="stats-table-row">';
				echo '<td class="stats-table-item">' . $row['name'] ?: '' . '</td>';
				echo '<td class="stats-table-item">' . $row['home_city'] ?: ''. '</td>';
				echo '<td class="stats-table-item">' . intval($row['wins'] + $row['losses'] + $row['overtime_losses']) ?: ''. '</td>';
				echo '<td class="stats-table-item">' . $row['wins'] ?: ''. '</td>';
				echo '<td class="stats-table-item">' . $row['losses'] ?: ''. '</td>';
				echo '<td class="stats-table-item">' . $row['overtime_losses'] ?: ''. '</td>';
				echo '<td class="stats-table-item">' . $row['conference'] ?: ''. '</td>';
				echo '<td class="stats-table-item">' . $row['division'] ?: ''. '</td>';
				echo '<td class="stats-table-item">' . $row['coach'] ?: ''. '</td>';
				echo '<td class="stats-table-item">' . $row['general_manager'] ?: ''. '</td>';
				echo '<td class="stats-table-item">' . $row['stadium'] ?: ''. '</td>';
				echo "<td class='stats-table-item'>
					<form action='./TeamUpdateForm.php' method='post'>
						<input type='hidden' name='name' value='" . $row['name'] ."' />
						<input type='submit' value='Update' />
					</form>
					</td>";
				echo "<td class='stats-table-item'>
					<form action='./TeamDelete.php' method='post'>
						<input type='hidden' name='name' value='" . $row['name'] ."' />
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
	<form action="./TeamForm.html" class="mr-1">
		<input type="submit" class="btn btn-primary" value="Add Another Team" />
	</form>

	<form action="../Players/PlayerStats.php" class="mr-1">
		<input type="submit" class="btn btn-secondary" value="View Players">
	</form>

	<form action="../Games/GameStats.php">
		<input type="submit" class="btn btn-secondary" value="View Games" />
	</form>
</div>
<?php include '../BaseLayout/baseEnd.html';?>

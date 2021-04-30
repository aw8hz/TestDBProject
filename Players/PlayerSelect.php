<?php
	require_once('./library.php');
	$db_connection = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

	if (mysqli_connect_errno()) {
		echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
		return null;
	}

	$result = mysqli_query($db_connection, "SELECT * FROM skater");

	echo"<table><tr><th>Name</th><th>Number</th><th>Salary</th><th>Team</th></tr>";

	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['number'] . "</td>";
		echo "<td>" . $row['salary'] . "</td>";
		echo "<td>" . $row['team'] . "</td>";
		echo "</tr>";
	}

	mysqli_close($db_connection);
?>

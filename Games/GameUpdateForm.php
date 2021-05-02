<!DOCTYPE HTML>
<html>
<head>
	<title>Update a Game:</title>
</head>
<body>
<h2>Update Game <?php echo $_POST['number']; ?>:</h2>
<form action="GameUpdate.php" method="post">
<input type="hidden" name="number" value="<?php echo $_POST['number']; ?>"><BR>
OT: <select name="OT">
		<option value="">---</option>
		<option value="true">Yes</option>
		<option value="false">No</option>
    </select><BR>
shootout: <select name="shootout">
	<option value="">---</option>
        <option value="true">Yes</option>
        <option value="false">No</option>
    </select><BR>
Home Team: <input type="text" name="home_team"><BR>
Away Team: <input type="text" name="away_team"><BR>
Home Goals: <input type="text" name="home_goals"><BR>
Home PIM: <input type="text" name="home_PIM"><BR>
Home Corsi: <input type="text" name="home_corsi"><BR>
Home Shots On Net: <input type="text" name="home_shots_on_net"><BR>
Home Missed Shots: <input type="text" name="home_missed_shots"><BR>
Away Goals: <input type="text" name="away_goals"><BR>
Away PIM: <input type="text" name="away_PIM"><BR>
Away Corsi: <input type="text" name="away_corsi"><BR>
Away Shots On Net: <input type="text" name="away_shots_on_net"><BR>
Away Missed Shots: <input type="text" name="away_missed_shots"><BR>
<input type="Submit">
</form>
<form action="GameStats.php" method="post">
    <input type="submit" value="Cancel" />
</form>
</body>
</html>

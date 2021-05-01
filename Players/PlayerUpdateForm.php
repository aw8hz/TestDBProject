<!DOCTYPE HTML>
<html>
<head>
	<title>Update a Player</title>
</head>
<body>
<h2>Update skater information for <?php echo $_POST['name']; ?>:</h2>
<form action="PlayerUpdate.php" method="post">
<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"><BR>
Number: <input type="text" name="number"><BR>
Position: <select name="position">
		<option value="">---</option>
		<option value="C">C</option>
		<option value="L">L</option>
		<option value="R">R</option>
		<option value="D">D</option>
		<option value="G">G</option>
	</select><BR>
Team: <input type=text" name="team"><BR>
Goals: <input type="text" name="goals"><BR>
Assists: <input type="text" name="assists"><BR>
+/-: <input type="text" name="plus_minus"><BR>
Salary: <input type="text" name="salary"><BR>
Handedness: <select name="handedness">
		<option value="">---</option>
		<option value="L">Left Handed</option>
		<option value="R">Right Handed</option>
	</select><BR>
Home Town: <input type="text" name="home_town"><BR>
Games Played: <input type="text" name="games_played"><BR>
Line Name: <input type="text" name="line_name"><BR>
<input type="Submit">

</body>
</html>

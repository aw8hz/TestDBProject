<?php include('../BaseLayout/baseBegin.html'); ?>
<div class="container">
	<h2>Update skater information for <?php echo $_POST['name']; ?>:</h2>
	<div class="d-flex flex-column p-2">
	<form action="PlayerUpdate.php" method="post">
	<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
	<div class="mb-3">
		<label for="numberInput" class="form-label">Number:</label>
		<input type="text" name="number" class="form-control" id="numberInput">
	</div>
	<div class="mb-3">
		<label for="positionSelect" class="form-label">Position:</label>
		<select name="position" class="form-select" id="positionSelect">
			<option value="">---</option>
			<option value="C">C</option>
			<option value="L">L</option>
			<option value="R">R</option>
			<option value="D">D</option>
			<option value="G">G</option>
		</select>
	<div class="mb-3">
		<label for="teamInput" class="form-label">Team:</label>
		<input type="text" name="team" class="form-control" id="teamInput">
	</div>
	<div class="mb-3">
		<label for="goalsInputs" class="form-label">Goals:</label>
		<input type="text" name="goals" class="form-control" id="goalsInput">
	</div>
	<div class="mb-3">
		<label for="assistsInput" class="form-label">Assists:</label>
		<input type="text" name="assists" class="form-control" id="assistsInput">
	</div>
	<div class="mb-3">
		<label for="plusMinusInput" class="form-label">+/-:</label>
		<input type="text" name="plus_minus" class="form-control" id="plusMinusInput">
	</div>
	<div class="mb-3">
		<label for="salaryInput" class="form-label">Salary:</label>
		<input type="text" name="salary" class="form-control" id="salaryInput">
	</div>
	<div class="mb-3">
		<label for="handednessSelect" class="form-label">Handedness:</label>
		<select name="handedness" class="form-select" id="handednessSelect">
			<option value="">---</option>
			<option value="L">Left Handed</option>
			<option value="R">Right Handed</option>
		</select>
	</div>
	<div class="mb-3">
		<label for="homeTownInput" class="form-label">Home Town:</label>
		<input type="text" name="home_town" class="form-control" id="homeTownInput">
	</div>
	<div class="mb-3">
		<label for="gamesPlayedInput" class="form-label">Games Played:</label>
		<input type="text" name="games_played" class="form-control" id="gamesPlayedInput">
	</div>
	<div class="mb-3">
		<label for="lineNameInput" class="form-label">Line Name:</label>
		<input type="text" name="line_name" class="form-control" id="lineNameInput">
	</div>
	<input type="Submit" class="btn btn-primary">
	</form>
	<form action="./PlayerStats.php" method="post">
		<input type="submit" class="btn btn-secondary mt-2" value="Cancel" />
	</form>
</div>
<?php include('../BaseLayout/baseEnd.html'); ?>

<?php include('../BaseLayout/baseBegin.html'); ?>

<div class="container">
<h2>Update Game <?php echo $_POST['number']; ?>:</h2>
<div class="d-flex flex-column p-2">
<form action="GameUpdate.php" method="post">
<input type="hidden" name="number" value="<?php echo $_POST['number']; ?>">
<div class="mb-3">
	<label for="OTSelect" class="form-label">OT:</label>
	<select name="OT" class="form-select" id="OTSelect">
		<option value="">---</option>
		<option value="1">Yes</option>
		<option value="0">No</option>
	</select>
</div>
<div class="mb-3">
	<label for="shootoutSelect" class="form-label">Shootout:</label>
	<select name="shootout" class="form-select" id="shootoutSelect">
		<option value="">---</option>
		<option value="1">Yes</option>
		<option value="0">No</option>
	</select>
</div>
<div class="mb-3">
	<label for="homeTeamInput" class="form-label">Home Team:</label>
	<input type="text" name="home_team" class="form-control" id="homeTeamInput">
</div>
<div class="mb-3">
	<label for="awayTeamInput" class="form-label">Away Team:</label>
	<input type="text" name="away_team" class="form-control" id="awayTeamInput">
</div>
<div class="mb-3">
	<label for="homeGoalsInput" class="form-label">Home Goals:</label>
	<input type="text" name="home_goals" class="form-control" id="homeGoalsInput">
</div>
<div class="mb-3">
	<label for="homePIMInput" class="form-label">Home PIM:</label>
	<input type="text" name="home_PIM" class="form-control" id="homePIMInput">
</div>
<div class="mb-3">
	<label for="homeCorsiInput" class="form-label">Home Corsi:</label>
	<input type="text" name="home_corsi" class="form-control" id="homeCorsiInput">
</div>
<div class="mb-3">
	<label for="homeSONInput" class="form-label">Home Shots on Net:</label>
	<input type="text" name="home_shots_on_net" class="form-control" id="homeSONInput">
</div>
<div class="mb-3">
	<label for="homeMSInput" class="form-label">Home Missed Shots:</label>
	<input type="text" name="home_missed_shots" class="form-control" id="homeMSInput">
</div>
<div class="mb-3">
	<label for="awayGoalsInput" class="form-label">Away Goals:</label>
	<input type="text" name="away_goals" class="form-control" id="awayGoalsInput">
</div>
<div class="mb-3">
	<label for="awayPIMInput" class="form-label">Away PIM:</label>
	<input type="text" name="away_PIM" class="form-control" id="awayPIMInput">
</div>
<div class="mb-3">
	<label for="awayCorsiInput" class="form-label">Away Corsi:</label>
	<input type="text" name="away_corsi" class="form-control" id="awayCorsiInput">
</div>
<div class="mb-3">
	<label for="awaySONInput" class="form-label">Away Shots on Net:</label>
	<input type="text" name="away_shots_on_net" class="form-control" id="awaySONInput">
</div>
<div class="mb-3">
	<label for="awayMSInput" class="form-label">Away Missed Shots:</label>
	<input type="text" name="away_missed_shots" class="form-control" id="awayMSInput">
</div>
<input type="Submit" class="btn btn-primary">
</form>
<form action="GameStats.php" method="post">
    <input type="submit" class="btn btn-secondary mt-2" value="Cancel" />
</form>
</div>
</div>
<?php include('../BaseLayout/baseEnd.html'); ?>

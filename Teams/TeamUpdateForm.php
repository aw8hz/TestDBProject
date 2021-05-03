<?php include('../BaseLayout/baseBegin.html'); ?>
<div class="container">
<h2>Update information for the <?php echo $_POST['home_city'] . " " . $_POST['name']; ?>:</h2>
<form action="TeamUpdate.php" method="post">
<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
<div class="mb-3">
	<label for="homeCityInput" class="form-label">Home City:</label>
	<input type="text" name="home_city" class="form-control" id="homeCityInput">
</div>
<div class="mb-3">
	<label for="winsInput" class="form-label">Wins:</label>
	<input type="text" name="wins" class="form-control" id="winsInput">
</div>
<div class="mb-3">
	<label for="lossesInput" class="form-label">Losses:</label>
	<input type="text" name="losses" class="form-control" id="lossesInput">
</div>
<div class="mb-3">
	<label for="OTLossesInput" class="form-label">Overtime Losses:</label>
	<input type="text" name="overtime_losses" class="form-control" id="OTLossesInput">
</div>
<div class="mb-3">
	<label for="conferenceSelect" class="form-label">Conference:</label>
	<select name="conference" class="form-select" id="conferenceSelect">
		<option value="">---</option>
		<option value="East">Eastern</option>
		<option value="West">Western</option>
	</select>
</div>
<div class="mb-3">
	<label for="divisionSelect" class="form-label">Division:</label>
	<select name="division" class="form-select" id="divisionSelect">
		<option value="">---</option>
		<option value="Atlantic">Atlantic</option>
		<option value="Central">Central</option>
		<option value="Metropolitan">Metropolitan</option>
		<option value="Pacific">Pacific</option>
	</select>
</div>
<div class="mb-3">
	<label for="coachInput" class="form-label">Coach:</label>
	<input type="text" name="coach" class="form-control" id="coachInput">
</div>
<div class="mb-3">
	<label for="GMInput" class="form-label">General Manager:</label>
	<input type="text" name="general_manager" class="form-control" id="GMInput">
</div>
<div class="mb-3">
	<label for="stadiumInput" class="form-label">Stadium:</label>
	<input type="text" name="stadium" class="form-control" id="stadiumInput">
</div>
<input type="Submit" class="btn btn-primary">
</form>
<form action="TeamStats.php" method="post">
	<input type="Submit" class="btn btn-secondary mt-2" value="Cancel" />
</form>
</div>
<?php include('../BaseLayout/baseEnd.html'); ?>

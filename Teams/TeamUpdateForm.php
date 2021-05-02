<?php include('../BaseLayout/baseBegin.html'); ?>

<h2>Update information for the <?php echo $_POST['home_city'] . " " . $_POST['name']; ?>:</h2>
<form action="TeamUpdate.php" method="post">
<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"><BR>
Home City: <input type="text" name="home_city"><BR>
Wins: <input type="text" name="wins"><BR>
Losses: <input type="text" name="losses"><BR>
Overtime Losses: <input type="text" name="overtime_losses"><BR>
Conference:	<select name="conference">
		<option value="">---</option>
		<option value="Eastern">Eastern</option>
		<option value="Western">Western</option>
	</select><BR>
Division:	<select name="division">
		<option value="">---</option>
		<option value="Atlantic">Atlantic</option>
		<option value="Central">Central</option>
		<option value="Metropolitan">Metropolitan</option>
		<option value="Pacific">Pacific</option>
	</select><BR>
Coach: <input type="text" name="coach"><BR>
General Manager: <input type="text" name="general_manager"><BR>
Stadium: <input type="text" name="stadium"><BR>
<input type="Submit">
</form>
<form action="TeamStats.php" method="post">
	<input type="Submit" value="Cancel" />
</form>

<?php include('../BaseLayout/baseEnd.html'); ?>

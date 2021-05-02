<?php

header("Location: ./TeamStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_delete = $db_con->prepare("DELETE FROM team WHERE name = ?");
$sql_delete->bind_param("s", $name);

$name = $_POST['name'];

//echo $sql_delete;

$sql_delete->execute();

echo "1 record deleted";

$sql_delete->close();

mysqli_close($db_con);
?>

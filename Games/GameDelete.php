<?php

header("Location: ./GameStats.php");

include_once("./library.php");
$db_con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql_delete = $db_con->prepare("DELETE FROM game WHERE number = ?");
$sql_delete->bind_param("i", $number);

$number = $_POST['number'];

//echo $sql_delete;

if(!$sql_delete->execute()){
	echo "Delete failed.";
	echo mysqli_error($db_con);
}else{
	echo "1 record deleted";
}

$sql_delete->close();
mysqli_close($db_con);
?>

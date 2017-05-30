<?php
include("connection.php");
if ($_POST) {
	$plate = $_POST['plate'];
	$custEmail = $_POST['custEmail'];


	$queryBook = "INSERT INTO `book`(`id`, `plate`, `customer`, `status`) VALUES (NULL,'$plate','$custEmail','Booked')";

	if (mysqli_query($con, $queryBook)) {
		echo "$plate was successfully Booked, You can now wait for your taxi to arrive";
	}else{
		echo "OOPS!! Its seems something went wrong trying to book your taxi, try again in a minute, or look for another taxi";
	}
}

?>
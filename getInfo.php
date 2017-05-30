<?php
include("connection.php");
include('session.php');

if (isset($_SESSION['customer_email']) && !empty($_SESSION['customer_email'])) {
	$custEmail = $_SESSION['customer_email'];

	$query = "SELECT * FROM `customers` WHERE `email`='$custEmail' ";
    $result = mysqli_query($con, $query);
/*Data is fetched in a result which is then converted to an array called customer*/

    while ($customer=mysqli_fetch_array($result)) {
    	$custFname = $customer['firstname'];
    	$custLname = $customer['lastname'];
    }
}


?>
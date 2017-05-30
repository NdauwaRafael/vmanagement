<?php
session_start();

function customerLoggedin(){
	if (isset($_SESSION['customer_email']) && !empty($_SESSION['customer_email'])) {
		return true;
	}else{
		return false;
	}
}

?>
<?php
session_start();
$http = $_SERVER['HTTP_REFERER'];
session_destroy();

header("location: ".$http);

?>
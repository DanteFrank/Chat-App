<?php

session_start();

include "db.inc.php";
	
$_SESSION['id'] == "";
	
	session_unset();
	session_destroy();
	header('location:index.php');
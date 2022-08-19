<?php 
include_once('admin_conn_code.php');

if (isset($_SESSION['email']))
	unset($_SESSION['email']);

session_destroy();

header("Location: ".$path.'PHP/admin/admin_login.php?flag=logout');
die();

?>
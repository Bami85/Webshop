<?php 
//echo "<pre>"; print_r($_SESSION); echo "</pre>";

if (isset($_SESSION['email'])) {
	if ($_SESSION['email']) {
		//if found then only allowed
	}
	else {
		header("Location: ".$path.'PHP/admin/admin_login.php?flag=login_again');
  		die();
	}
}
else {
  header("Location: ".$path.'PHP/admin/admin_login.php?flag=login_again');
  die();
}

?>
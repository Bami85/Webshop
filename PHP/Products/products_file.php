<?php 
include_once('../../config.php');

$path = './';
//$path = '../../';

//during nilesh check, make it true. otherwise false.
$myCheck = MY_CHECK; 

if ($myCheck) {
  $path = SITE_URL;
}

?>
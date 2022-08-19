<?php 
session_start();

include_once('../../config.php');

$path = './';
$servername = "localhost";

//during nilesh check, make it true. otherwise false.
$myCheck = MY_CHECK; 
//http://localhost/WebshopPhp-main/PHP/admin/productsAdmin.php
//http://localhost/WebshopPhp-main/PHP/admin/ordersAdmin.php
//http://localhost/WebshopPhp-main/PHP/admin/userAdmin.php
//http://localhost/WebshopPhp-main/PHP/admin/newsletterAdmin.php

if ($myCheck) {
  $path = SITE_URL;
  $servername = SITE_SERVER_NAME;
}

$username = SITE_DB_USERNAME;
$password = SITE_DB_PASSWORD;

$dbname = SITE_DB_NAME;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";

?>
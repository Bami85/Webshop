<?php 
session_start();

include_once('config.php');

//echo '<pre>'; print_r($_SESSION); echo '</pre>'; 

$adminLoginFound = false;

if (isset($_SESSION['email'])) {
   if ($_SESSION['email']) {
      $adminLoginFound = true;
   }
}

$path = '../../';
$path_2 = './';  //signIn.php and signUp.php , converted .html to .php

//during nilesh check, make it true. otherwise false.
$myCheck = MY_CHECK; //http://localhost/WebshopPhp-main/

if ($myCheck) {
  $path = SITE_URL;
  //$path_2 = $path.'html/startpage/'; //no need html folder files....
  $path_2 = $path.'PHP/startpage/';
}


$login_admin_page = $path . 'PHP/admin/admin_login.php';
$admin_label = 'Login';

if ($adminLoginFound) {
    $login_admin_page = $path . 'PHP/admin/admin.php';
    $admin_label = 'Dashboard';
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $path ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $path ?>css/style.css">
    <link rel="stylesheet" href="<?= $path ?>css/hero.css">
    <link rel="stylesheet" href="<?= $path ?>css/features.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <title>WebShop</title>
</head>
<body>
  
    <!-- ---------------------------------------------header--------------------------------------------------------- -->
    <header>
        <div class="px-3 py-2 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="./index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <i class="lni lni-home logoPhp"></i>
              </a>

              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="<?= $login_admin_page ?>" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    Admin <?= $admin_label ?>
                  </a>
                </li>
                <li>
                  <a href="<?= $path ?>PHP/UserLogin/Login.php" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    Customer
                  </a>
                </li>
                <li>

                <li>
                  <a href="/allproductspage.php" class="nav-link text-white" id="products" >
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                    All Products
                  </a>
                </li>
                <li>
                  <a href="<?= $path ?>categories.php" class="nav-link text-white" id="products" >
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                    Categories
                  </a>
                </li>
                <li>
                  <a class="link-light" href="<?= $path ?>PHP/startpage/cart.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </header>
      <!-- ---------------------------------------------header--------------------------------------------------------- -->
      <!-- ---------------------------------------------hero section--------------------------------------------------------- -->
      <div class="px-4 py-5 my-5 text-center">
  <h1 class="display-5 fw-bold">Web shop</h1>
<img class="d-block mx-auto mb-4" src="<?= $path ?>productImages/Hero section/logo.png" alt="" width="40%" height="auto">
<div class="col-lg-6 mx-auto">
<p class="lead mb-4">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</p>
</div>
</div>
      <!-- ---------------------------------------------Hero section--------------------------------------------------------- -->

      




      <!-- ---------------------------------------------cat--------------------------------------------------------- -->
      <!-- ---------------------------------------------news--------------------------------------------------------- -->
     

      <!-- ---------------------------------------------news--------------------------------------------------------- -->
      <div class="container col-xl-10 col-xxl-8 px-4 py-5">
          <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
              <h1 class="display-6 fw-bold lh-1 mb-3">Subscribe to our newsletter</h1>
              <img class="d-block mx-auto mb-4" src="./productImages/Hero section/news.jpg" alt="" width="100%" height="auto">
              <p class="col-lg-10 fs-4"></p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
              <form action="./index.php" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                  <label for="floatingInputEmail">Email address</label>
                </div>
                <br>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputName" placeholder="Name">
                  <label for="floatingInputName">Name</label>
                </div>
                <button id="SignUpNews" class="w-100 btn btn-lg btn-secondary" type="submit">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      
      
      
      <!-- ---------------------------------------------footer--------------------------------------------------------- -->
      <div class="container">
        <footer class="py-4">
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="mailto:webshop@gmail.com"><i class="lni lni-envelope"></i></a></li>
              <li class="ms-3"><a class="link-dark" href="tel:070-000-000"><i class="lni lni-phone"></i></a></li>
            </ul>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="https://twitter.com"><i class="lni lni-twitter-original"></i></a></li>
              <li class="ms-3"><a class="link-dark" href="https://instagram.com"><i class="lni lni-instagram-original"></i></a></li>
              <li class="ms-3"><a class="link-dark" href="https://facebook.com"><i class="lni lni-facebook-original"></i></a></li>
              <li class="ms-3"><a class="link-dark" href="https://github.com/Bami85/WebshopPhp"><i class="lni lni-github-original"></i></a></li>
            </ul>
          </div>
        </footer>
      </div>
      <!-- ---------------------------------------------footer--------------------------------------------------------- -->
<div class="b-example-divider"></div>
<script src="./script/bootstrap.min.js"></script>
<script src="./script/bootstrap.min.js.map"></script>
<!-- <script src="./Js/logic.js"></script> -->
<script type="module" src="./Js/category.js"></script>
<script type="module" src="./Js/newsletter.js"></script>

</body>
</html>

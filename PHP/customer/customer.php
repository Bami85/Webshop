<?php 
//include_once('customer_file.php');
include_once('../admin/admin_conn_code.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $path ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $path ?>css/style.css">
    <link rel="stylesheet" href="<?= $path ?>css/list-groups.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <title>WebShop</title>
</head>
<body>
    <!-- ---------------------------------------------header--------------------------------------------------------- -->
    <header>
        <div class="px-3 py-2 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              
              <?php include_once('../../home_icon.php'); ?>

              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="./customer.html" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                    Dashboard
                  </a>
                </li>
                <li>
                  <a href="./profileCustomer.html" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    Profile
                  </a>
                </li>
                <li>
                  <a href="./ordersCustomer.html" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    Orders
                  </a>
                </li>
                <li>
                  <a href="./products.html" class="nav-link text-white" id="products" >
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                    Shop
                  </a>
                </li>
                <li>
                  <?php include_once('../../cart_icon.php'); ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
          <div class="container d-flex flex-wrap justify-content-center">
            <?php include_once('../../logout_button.php'); ?>
          </div>
        </div>
      </header>
      <!-- ---------------------------------------------header--------------------------------------------------------- -->
       <!-- ---------------------------------------------Dashboard--------------------------------------------------------- -->
       <main>
       <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
             <h1 class="display-4 fw-normal">Welcome back</h1>
             <p class="fs-5 text-muted">Check out your orders and details</p>
             <img src="./productImages/Herosection/appleWatch-2019" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Hero" width="500" height="300" loading="lazy">
      </div>
      <div class="list-group list-group-checkable">
        <a class="link-dark" href="./profileCustomer.html">
          <label class="list-group-item py-3" for="listGroupCheckableRadios1">
              Profile
                <span class="d-block small opacity-50">
                  Oversee profile information
                </span>
            </label>
        </a>
        <a class="link-dark" href="./ordersCustomer.html">
          <label class="list-group-item py-3" for="listGroupCheckableRadios1">
              Orders
                <span class="d-block small opacity-50">
                  Oversee orders
                </span>
            </label>
        </a>
      </div>
      </main>
      <!-- ---------------------------------------------Dashboard--------------------------------------------------------- -->
      <!-- ---------------------------------------------footer--------------------------------------------------------- -->
      <!-- ---------------------------------------------footer--------------------------------------------------------- -->
<script src="./script/bootstrap.min.js"></script>
<script src="./Js/newsletter.js"></script>

</script>
</body>
</html>

<?php 
include_once('admin_conn_code.php');

include_once('admin_access.php');
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
    <?php include_once('admin_header.php'); ?>
      <!-- ---------------------------------------------header--------------------------------------------------------- -->
       <!-- ---------------------------------------------admin--------------------------------------------------------- -->
       <?php include_once('admin_signout.php'); ?>

       <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
             <h1 class="display-4 fw-normal">Welcome Admin!</h1>
             <?php 
                echo 'Your Email : '.$_SESSION['email'];
             ?>
      </div>
<div class="list-group list-group-checkable">
  <a class="link-dark" href="./ordersAdmin.php">
    <label class="list-group-item py-3" for="listGroupCheckableRadios1">
        Orders
          <span class="d-block small opacity-50">
            Oversee orders
          </span>
      </label>
  </a>
  <a class="link-dark" href="./userAdmin.php">
    <label class="list-group-item py-3" for="listGroupCheckableRadios1">
        Users
          <span class="d-block small opacity-50">
            Oversee users
          </span>
      </label>
  </a>
  <a class="link-dark" href="./newsletterAdmin.php">
    <label class="list-group-item py-3" for="listGroupCheckableRadios3">
    Newsletter
    <span class="d-block small opacity-50">Subscribers to newsletter</span>
    </label>
  </a>
  <a class="link-dark" href="./productsAdmin.php">
    <label class="list-group-item py-3" for="listGroupCheckableRadios2">
    Products
    <span class="d-block small opacity-50">Edit product quantity</span>
    </label>
  </a>
</div>

  <!-- ---------------------------------------------admin--------------------------------------------------------- -->

<script src="./script/bootstrap.min.js"></script>
</body>
</html>

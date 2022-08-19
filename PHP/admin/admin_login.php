<?php 
include_once('admin_conn_code.php');

$_SESSION['email'] = '';

//här hashar vi password genom att ange postmetoden och på rad 22 att änvanda admin_password=MD5($pwd);

$admin_email = $_POST['admin_email'];
$pwd = $_POST['admin_password'];

//===============================================
if (isset($_POST['hidSubmitAdminLogin'])) {
  if ($_POST['hidSubmitAdminLogin'] == 'admin_login') {
      echo "<pre>"; print_r($_POST); echo "</pre>"; 
      //echo 'form submitted....... <br />'; //exit;

      $successfullLogin = false;

      if (isset($_POST['admin_email']) && isset($_POST['admin_password'])) {
        $admin_email = trim($_POST['admin_email']);
        $admin_password = trim($_POST['admin_password']);
        $admin_password=MD5($pwd);
        

        if ($admin_email && $admin_password) {
          $sql = "SELECT * FROM admin where email = '".$admin_email."' and password = '".$admin_password."'";
          $result = mysqli_query($conn, $sql);
          //echo "<pre>"; print_r($result); echo "</pre>";

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              //echo "id: " . $row["ID"]. " - email: " . $row["email"]. "<br>";
              if ($row["email"] == $admin_email) {
                  $successfullLogin = true;

                  $_SESSION['email'] = $row["email"]; //on success only set email
              }
            }
          }
        }
      }

      //exit;

      if ($successfullLogin) {
          header("Location: ".$path.'PHP/admin/admin.php?flag=success');
      }
      else {
          header("Location: ".$path.'PHP/admin/admin_login.php?flag=failed');
      }

      die();
  }
}
//===============================================

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= $path ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $path ?>css/style.css">
    <link rel="stylesheet" href="<?= $path ?>css/signin.css" >
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <title>WebShop Admin Login</title>
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form class="" action="" method="post">
        <i class="lni lni-lock-alt bd-placeholders-images"></i>
        <h1 class="h3 mb-3 fw-normal">Admin Login</h1>
        <?php 
          if (isset($_GET['flag'])) {
              if ($_GET['flag'] == 'failed') {
                  echo '<br /> Invalid email or password. Please try again ! <br />';
              }
          }
        ?>
        <div class="form-floating">
          <input  class="form-control" id="floatingInput" name="admin_email" placeholder="name@example.com">
          <label >Email address</label>
        </div>
        <div class="form-floating">
          <input type="password"  class="form-control" id="floatingPassword" name="admin_password" placeholder="Password">
          <label >Password</label>
        </div>
        <div class="checkbox mb-3">
          <!-- <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label> -->
        </div>
        <!-- <a href="./customer.html"> -->
          <button class="w-100 btn btn-lg btn-secondary" type="submit">Login</button>
        <!-- </a> -->

        <input type="hidden" name="hidSubmitAdminLogin" value="admin_login" />

      </form>
    </main>
</body>
</html>

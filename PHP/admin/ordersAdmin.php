<?php 
include_once('admin_conn_code.php');

include_once('admin_access.php');

//$sql = "SELECT * FROM orders";
$sql = "SELECT * FROM orders a, orderdetail b where a.ID = b.orderID";
$result = mysqli_query($conn, $sql);


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
       
<section class="h1Admin">
  <h1>Orders</h1>
</section>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">OrderID</th>
              <th scope="col">UserID / CustomerID</th>
              <th scope="col">Quantity</th>
              <th scope="col">Sum(SEK)</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?= $row['ID']; ?></td>
              <td><?= $row['customerID']; ?></td>
              <td><?= $row['qty']; ?></td>
              <td><?= $row['orderSum']; ?> :-</td>
            </tr>
            <?php 
              }

              mysqli_free_result($result);
            }
            ?>
          </tbody>
        </table>
      </div>
      
    <!-- </main>
  </div>
</div> -->
  <!-- ---------------------------------------------admin--------------------------------------------------------- -->
<script src="<?= $path ?>script/bootstrap.min.js"></script>
</body>
</html>
<?php 
mysqli_close($conn);
?>
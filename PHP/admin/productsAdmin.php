<?php 
include_once('admin_conn_code.php');

include_once('admin_access.php');

//===============================================
if (isset($_POST['hidSubmitProduct'])) {
  if ($_POST['hidSubmitProduct'] == 'admin_product') {
      //echo "<pre>"; print_r($_POST); echo "</pre>"; 
      //echo 'form submitted....... <br />'; //exit;

      if (isset($_POST['Quantity'])) {
        $Quantity = $_POST['Quantity'];
        $hidProductId = $_POST['hidProductId'];
        if ($Quantity) {
           foreach($Quantity as $keyIdx => $Qty) {
            if ($Qty && (intval($Qty) > 0 || intval($Qty) < 0)) {
            //  if ($Qty && intval($Qty) > 0) {
                  $productId = $hidProductId[$keyIdx];
                  //echo $productId.' >> '.$Qty.'<br />';

                  $sql = 'Update product set unitsInStock = unitsInStock + '.$Qty.' where ID = '.$productId;
                  //echo $sql.'<br />';

                  mysqli_query($conn, $sql);
              }
           }
        }
      }

      //exit;

      header("Location: ".$_SERVER['PHP_SELF']);
      die();
  }
}
//===============================================


$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

/*if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["ID"]. " - productName: " . $row["productName"]. "<br>";
  }
} else {
  echo "0 results";
}*/
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
  <h1>Products</h1>
</section>


<form class="" action="" method="post">

      <div class="table-responsive">

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ProductID</th>
              <th scope="col">Product</th>
              <th scope="col">Description / Price ( per Unit )</th>
              <th scope="col">In Stock</th>
              <th scope="col">Edit ( Qty ) <br /> <span style="font-size:12px;">( In Stock = In Stock + Qty )</span> </th>
            </tr>
          </thead>
          <tbody>
            <?php 
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?= $row['ID']; ?> <input type="hidden" name="hidProductId[]" value="<?= $row['ID']; ?>" /> </td>
              <td><?= $row['productName']; ?></td>
              <td><?= $row['unitPrice']; ?></td>
              <td><?= $row['unitsInStock']; ?></td>
              <td>
                <!-- <form class="" action="index.html" method="post"> -->
                  <input type="text" name="Quantity[]" value="" maxlength="3" size="3">
                <!-- </form> -->
            </td>
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
<div class="px-3 py-2 border-bottom mb-3">
  <div class="container d-flex flex-wrap justify-content-center">
    <div class="text-end">
      <!-- <a href="./productsAdmin.html"> --><button type="submit" class="btn btn-secondary">Save Changes</button><!-- </a> -->
    </div>
  </div>
</div>

<input type="hidden" name="hidSubmitProduct" value="admin_product" />

</form>

<script src="<?= $path ?>script/bootstrap.min.js"></script>
</body>
</html>
<?php 
mysqli_close($conn);
?>
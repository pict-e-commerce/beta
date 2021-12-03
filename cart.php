
<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";
// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);
session_start();

function data_uri($file, $mime) 
{  
  $contents = file_get_contents($file);
  $base64   = base64_encode($contents); 
  return ('data:' . $mime . ';base64,' . $base64);
}
$var = 1;
?>
<?php
if($_SESSION["username"]) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <!-- bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap Javascript  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <!--                                 Header bar                               -->

  <nav class="navbar navbar-expand-sm navbar-light bg-warning">
    <img class="navbar-brand" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" width=30px>
    <a class="navbar-brand" href="">E-Commerece</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="myAccount.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewCart.php">My Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Rewards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Welcome Div -->
  <div class="welcome-div">
    <h2>Welcome,  <?php echo $_SESSION["username"]; ?> </h2>
  </div>

  <!-- Category 1  - Mobile Phones-->
  <div class="row category-row">
    <div class="col-lg-2 category-item">
      <a href="#section-mobile">Books</a>
    </div>
    <div class="col-lg-2 category-item">
      <a href="#section-electronics">Electronics</a>
    </div>
    <div class="col-lg-2 category-item">
      <a href="#section-sports">Sports</a>
    </div>
    <div class="col-lg-2 category-item">
      <a href="#section-clothing">Cothing</a>
    </div>
    <div class="col-lg-2 category-item">
      <a href="#section-ent">Entertainment</a>
    </div>
  </div>
    <table style="border: 1px solid; text-align:center">
        <tr>
            <th width="5%">Order number </th>
            <th width="15%">Product ID</th>
            <th width="20%">Amount</th>
            <th width="5%">Quantity</th>
        </tr>
        <?php
            $sum = 0;
            $id = $_SESSION["id"];
            $sql = "SELECT product_id,Price,Quantity FROM orders WHERE customer_id=$id ";
            
            $result = $conn->query($sql) or die($conn->error);
            while ($row = $result->fetch_assoc()) {
                ?>
        <tr>
            <td>
                <?php echo $var; $var++ ?>
            </td>
            <td>
                <?php echo $row["product_id"];?>
            </td>
            <td>
                <?php echo $row["Price"];
                $sum = $sum + $row["Price"];
                ?>
            </td>
            <td>
                <?php echo $row["Quantity"];?>
            </td>
        </tr>
            <?php
            }
            ?>
            
    </table>
    <a href="" class="btn btn-dark" style="margin-left:550px; margin-top:10px;"> Total Cost : <?php echo $sum;?></a>
    <a href="" class="btn btn-dark" style="margin-left:530px; margin-top:150px;"> Proceed to Payment</a>
<?php
}else echo "<h1>Please login first .</h1>";
?>

</body>
</html>
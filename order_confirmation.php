<?php
/*
This page shows order confirmation to customers properly showing order details such as
assigned order id, order total, customer name, address and a message for customer to keep
amount ready in 30-40 minutes as it is cash on delvery method of payment.
*/
include "connection.php";
$query1="select * from tblcustomers order by order_id desc limit 1";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($result1);
$query2="select * from order_details where order_id=$row1[1]";
$result2=mysqli_query($conn,$query2);
$query3="select order_total from order_info where order_id=$row1[1]";
$result3=mysqli_query($conn,$query3);
$row3=mysqli_fetch_array($result3);
?>
<html>
<head>
  <title>Frozen Foods</title>
 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php"></a>
          </div>
          <ul class="nav navbar-nav">
              <li><a href="index.php">Log Out</a></li>
              <li><a href="about_us.php">About Us</a> </li>
              <li><a href="order_online.php">Order online</a></li>
          </ul>
      </div>
  </nav>
  <div class="form-group col-md-3"></div>
  <div class="form-group col-md-6">
      <div class="well">
        <h2>Thanks for your order <?php echo ucfirst($row1[2])." ".ucfirst($row1[3])."!" ?></h2>
        <h4>Order ID: <?php echo $row1[1] ?></h4>
        <h4>Items ordered:</h4>
          <div class="table-responsive">
          <table class="table table-bordered">
          <?php
          while($row2=mysqli_fetch_array($result2)){
          ?>
          <tbody>
              <tr>
                  <td><?php echo $row2[1]."   ";?><span class="badge"><?php echo $row2[3];?></span></td>
              </tr>
              <?php
              }
              ?>
              <tr>
                  <td><strong>Total</strong><span class="badge"><?php echo $row3[0];?></span></td>
              </tr>
              </tbody>
          </table>
          </div>
        <h4>Phone: <?php echo $row1[8]?></h4>
        <h4>Address: <?php echo $row1[4].", ".ucfirst($row1[5])." ".strtoupper($row1[6]) ?></h4>
        <div class="alert alert-info">
            <strong>
                <h4>Your order will be delivered to your address in 30-40 minutes approx. Please keep <u><?php echo $row3[0];?></u> ready.</h4>
            </strong>
        </div>
        <a href="order_online.php">Place another order</a>
      </div>
  </div>
</body>
</html>

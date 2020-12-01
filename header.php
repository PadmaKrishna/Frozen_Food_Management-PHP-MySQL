<?php
session_start();
?>
<html>
<head>
  <title>Frozen Foods</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

  <nav  class="navbar navbar-default">
         <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php"></a>
          </div>
          <ul  class="nav navbar-nav">
              <li><a href="index.php"><h3>Home</h3></a></li>
              <li><a href="about_us.php"><h3>About Us</h3></a> </li>
              <li><a href="order_online.php"><h3>Order Online</h3></a></li>
              <li><a href="admin/admin_login.php"><h3>Admin Login</h3></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="order_checkout.php"><h3>CART</h3>
                      <?php
                      if(isset($_SESSION['total']))
                          echo $_SESSION['count']."ITEMS ".$_SESSION['total'];
                      else
                          echo "0 ITEMS-Rs 0";
                      ?>
                  </a>
              </li>
          </ul>
      </div>
  </nav>
<body>
</html>

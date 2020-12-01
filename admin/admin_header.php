<?php
session_start();
if(isset($_SESSION['email']))
{}
else
{
    header("location:admin_login.php");
}
include "connection.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Frozen Foods</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
        a {
            text-decoration: none;
        }
        img {
            float: left;
            width: 90px;
            height: 90px;
        }
        h4 {
            position: relative;
            left: 15px;
        }
    </style>
</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
               <!--  <span class="mdl-layout-title">Frozen Foods</span>
                <div class="mdl-layout-spacer"></div>
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                    <i class="material-icons">more_vert</i>
                </button> -->
                <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                    
                </ul>
            </div>
        </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
                <img src="images/admin_logo.png" class="demo-avatar">
                <br>
                <div class="demo-avatar-dropdown">
                    <span><?php echo $_SESSION['email']?></span>
                </div>
            </header>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                <a class="mdl-navigation__link" href="admin_view_menu.php">Home</a>
                  <a class="mdl-navigation__link" href="admin_customer.php">Customer</a>
                <a class="mdl-navigation__link" href="admin_view_menu.php">View Product</a>
                <a class="mdl-navigation__link" href="admin_orders_view.php">Orders</a>
                <a class="mdl-navigation__link" href="admin_logout.php">Logout</a>
            </nav>
        </div>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</body>
</html>
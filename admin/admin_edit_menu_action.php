<?php
include "connection.php";
$product_name=$_REQUEST['product_name'];
$product_type=$_REQUEST['product_type'];
$image=$_REQUEST['image'];
$description=$_REQUEST['description'];
$price=$_REQUEST['price'];
$quantity=$_REQUEST['quantity'];


//updating the "menu" table 
$query="update tblproduct set product_type='$product_type',image='$image',description='$description',price='$price',quantity='$quantity' where product_name='$product_name'";
mysqli_query($conn, $query);
header("location:admin_view_menu.php?q=3");

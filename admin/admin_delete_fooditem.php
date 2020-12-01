<?php
include "header.php";
include "connection.php";
$product_name=$_REQUEST['product_name'];
$query="delete from tblproduct where product_name='$product_name'";//deleting food_item from the table
mysqli_query($conn,$query);
header("location:admin_view_menu.php?q=1");

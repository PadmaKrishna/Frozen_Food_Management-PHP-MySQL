<?php
include "connection.php";
$status=$_REQUEST['status'];
$order_id=$_REQUEST['order_id'];
//query to update the status in order_info table
$query="update order_info set status='$status' where order_id='$order_id'";
mysqli_query($conn, $query);
header("location:admin_orders_view.php?q=1");

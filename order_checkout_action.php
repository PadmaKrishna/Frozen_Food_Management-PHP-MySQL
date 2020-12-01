<?php
session_start();
include "connection.php";
$query3="SELECT MAX(order_id) from tblcustomers";
$res=mysqli_query($conn,$query3);
$row=mysqli_fetch_array($res);
$order_id=$row[0]+1; 
foreach ($_SESSION["cart_item"] as $item){
    $query1 = "insert into order_details values('','" . $item["product_name"] . "','" . $item["price"] . "','" . $item["quantity"] . "','".$order_id."')";
    mysqli_query($conn, $query1);
}
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$street_address=$_REQUEST['street_address'];
$city=$_REQUEST['city'];
$zipcode=$_REQUEST['zipcode'];
$country=$_REQUEST['country'];
$contact_number=$_REQUEST['contact_number'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$query2 = "insert into tblcustomers values('','".$order_id."','" . $first_name . "','" . $last_name . "','" . $street_address . "','".$city."','".$zipcode."','".$country."','".$contact_number."','".$email."','".$password."')";
mysqli_query($conn,$query2);
$total=$_SESSION['total'];
$status="Not completed";
$query4="insert into order_info values('','".$order_id."','".$total."','".$status."')";
mysqli_query($conn,$query4);
session_destroy();
header("location:order_confirmation.php ");

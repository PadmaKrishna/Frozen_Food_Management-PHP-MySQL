<?php
include "connection.php";
//fetching values passed from "add food item" form
$product_name=$_REQUEST['product_name'];
$product_type=$_REQUEST['product_type'];
$image=$_REQUEST['image'];
$description=$_REQUEST['description'];
$price=$_REQUEST['price'];
//query selects all attributes of "menu" table
$query="select * from tblproduct";
$res=mysqli_query($conn,$query);
$flag=0;
//checking if food_item is already stored in the database
while($row=mysqli_fetch_array($res))
{
    if($product_name==$row[1])
    {
        $flag=1;
        break;
    }
}
//if food_item already stored
if($flag==1)
{
    header("location:admin_view_menu.php?q=4");
}
//else insert the food_item and its fields into the "menu" table in the database
else {
    $query2 = "insert into tblproduct values('','" . $product_name . "','" . $product_type . "','" . $image . "','" . $description . "','" . $price . "')";
    mysqli_query($conn, $query2);
    header("location:admin_view_menu.php?q=2");
}

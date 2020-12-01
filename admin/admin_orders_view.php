<?php
include "admin_header.php";
include "connection.php";
$query="SELECT * FROM order_info";
$result=mysqli_query($conn,$query);
//alert
if(isset($_REQUEST['q'])) {
    if ($_REQUEST['q'] == 1) {
        ?>
        <div class="alert alert-success"style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Status has been changed</center>
        </div>
        <?php
    }
}
?>
<!doctype>
<html>
<head>
  <!--
  This page shows the list of orders specifying order id, details, total, name, address and contact information
  of customer. There is also order status which by default is not completed. Admin can change the status to
  completed when the order has been processed by clicking on change button.
  -->
</head>
<body>
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><h2>List of orders</h2></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped" style="font-size: small">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Order details</th>
                        <th>Order total</th>
                        <th>Customer name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row=mysqli_fetch_array($result)){
                        $query2="select * from order_details where order_id=$row[1]";
                        $result2=mysqli_query($conn,$query2);
                        $order_details="";
                        //concatinating strings to show order details, it shows details in this format "2 Burritos, "
                        while($row2=mysqli_fetch_array($result2)){
                            $order_details .= $row2[3]." ".$row2[1].", ";
                        }
                        $query3="select * from tblcustomers where order_id=$row[1]";
                        $result3=mysqli_query($conn,$query3);
                        $row3=mysqli_fetch_array($result3);
                        //showing name, address and contact information of customer
                        $name=ucfirst($row3[2])." ".ucfirst($row3[3]);
                        $address=$row3[4].", ".ucfirst($row3[5]).", ".strtoupper($row3[6]);
                        $contact=$row3[8].", ".$row3[9];
                        ?>
                    <tr>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo rtrim($order_details, ", ") ?></td>
                        <td><?php echo "Php".$row[2] ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $address ?></td>
                        <td><?php echo $contact ?></td>
                        <td>
                            <?php
                            /*
                              if  order is not completed then status is "Not completed" in red color otherwise
                              status is "Completed" in green color. user can change the status by clicking on
                              "Change" button.
                             */
                            if($row[3]=="Not completed"){
                            ?>
                                <font color="red">Not completed</font>
                            <?php
                            }
                            else{
                            ?>
                                <font color="green">Completed</font>
                            <?php
                            }
                            ?>
                        <td>
                            <button type="button" onclick="location.href='admin_orders_change_status.php?order_id=<?php echo $row[1] ?>'"
                                  class="btn btn-primary btn-xs">Change</button>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>

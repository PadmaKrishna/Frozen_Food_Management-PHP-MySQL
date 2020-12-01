<?php
include "admin_header.php";
include "connection.php";
$query="select * from tblcustomers";
$result=mysqli_query($conn,$query);

//alerts
if(isset($_REQUEST['q'])) {
    if ($_REQUEST['q'] == 1) {
        ?>

        <div class="alert alert-info" style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>CUstomers deleted</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 2) {
        ?>
        <div class="alert alert-success"style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Customers added</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 3) {
        ?>
        <div class="alert alert-success"style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Customers updated</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 4) {
        ?>
        <div class="alert alert-danger"style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Customers already exists!</center>
        </div>
        <?php
    }
}
?>
<!doctype>
<html>
<head>
</head>
<body>
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                      <div class="panel-heading">
                    <center><h2>List of Customers</h2></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th >Id</th>
                        <th width="100px">Order Id</th>
                        <th width="100px">First Name</th>
                        <th>Last Name</th>
                        <th>Street Address</th>
                        <th>City</th>
                        <th>Zipcode </th>
                        <th>Country</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count=1;
                        while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $count."." ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td><?php echo $row[6] ?></td>
                        <td><?php echo $row[7] ?></td>
                         <td><?php echo $row[8] ?></td>
                          <td><?php echo $row[9] ?></td>

                        
                       
                    </tr>
                    <?php
                    $count++;
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>

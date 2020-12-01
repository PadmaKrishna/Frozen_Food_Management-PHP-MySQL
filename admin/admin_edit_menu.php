<!doctype>
<html>
<head></head>
<body>
    <?php
    include "admin_header.php";
    include "connection.php";
    $product_name=$_REQUEST['product_name'];
    $query="select * from tblproduct where product_name='$product_name'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    ?>
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="well">
                <div class="row">
                    <div class="form-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2><center>Edit Product information</center></h2></div>
                        </div>
                    </div>
                </div>
                <form action="admin_edit_menu_action.php" method="get">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <table class="table table-condensed">
                                <thead></thead>
                                <tbody>
                                    <tr>
                                        <td>Product Name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="product_name" value="<?php echo $product_name ?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Product Type</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="product_type" value="<?php echo $row[2] ?>" required="required"></td>
                                    </tr>
                                    <tr>
                                        <td>image</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="image" value="<?php echo $row[3] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="price" value="<?php echo $row[5] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td></td>
                                        <td><textarea class="form-control" rows="3" name="description"><?php echo $row[4] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>On Hand</td>
                                        <td></td>
                                        <td><input type="number"class="form-control"name="quantity" value="<?php echo $row[6] ?>" readonly></td>
                                    </tr>
                                   <tr>
                                        <td>Quantity</td>
                                        <td></td>
                                        <td><input type="number"class="form-control"name="quantity" value="<?php echo $row[7] ?>"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    include "admin_header.php"; 
    ?>
    
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-3"></div>
      
        <div class="col-md-6">
            <div class="well">
                <div class="row">
                    <div class="form-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3><center>Add Product</center></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="admin_add_menu_action.php" method="get">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Product Type</label>
                            <input type="text" name="product_type" placeholder="" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Image</label>
                            <input type="text" name="image" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Price</label>
                            <input type="text" name="price" placeholder=""class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

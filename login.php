<html>
<head>
    <title>Frozen foods</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
    </script>
</head>
<body>
<?php
if(isset($_REQUEST['q'])) {
    if($_REQUEST['q'] == 1) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Sorry, we couldn't find an account with that email and password</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 2) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Account with entered email already exists!</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 3) {
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Account created</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 4) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Password and confirm password should match!</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 5) {
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Your password has been changed successfully</center>
        </div>
        <?php
    }
    if($_REQUEST['q'] == 6) {
        ?>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>You have successfully logged off</center>
        </div>
        <?php
    }
}
?>
<br>
<div class="form-group col-md-4"></div>
<div class="form-group col-md-4">
    <div class="well">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <center><h2>Customer Login</h2></center>
            </div>
        </div>
        <form action="login_action.php" method="get">
            <div class="row" style="padding: 25px">

                <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="row" style="padding: 25px">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <br>
            <div class="row"style="padding: 20px">
                <button class="btn btn-block btn-primary" href="order_confirmation.php">Login</button>
            </div>
        </form>
        <a href="customer_details.php">Need an account?</a>
        <a href="admin_forgot_password.php"style="float:right">Forgot password?</a>
    </div>
</div>
</body>
</html>
<?php
session_start();
//destroying session 
unset($_SESSION["email"]);
session_destroy();
header("location:admin_login.php?q=6");

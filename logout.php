<?php  
include("Connection.php");
    session_start();
     error_reporting(0);

     session_unset();
     header('location:index.php');
 ?>
<?php 
    $connection = mysqli_connect("localhost","gaurav","Gaurav@123") or die("Can't connect to database");
    $db = mysqli_select_db($connection,"bbms");
?>
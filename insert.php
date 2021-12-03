<?php

include 'conn.php';


if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $q="INSERT INTO info (fname, lname,age,email,phone,address)
    VALUES('$fname', '$lname', '$age', '$email', '$phone', '$address')";
    

    $query=mysqli_query($con,$q);    
}


?>

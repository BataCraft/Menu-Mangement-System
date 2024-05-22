<?php
include "../../connection.php";

if (isset($_POST['submit'])) {
    $uid = $_POST['uid'];
     $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
   

    $sql1 = "UPDATE user SET fname = '$fname', uemail = '$email', uphone = '$phone', address = '$address' WHERE uid = $uid ";

    // echo $sql1;
    $data = mysqli_query($conn, $sql1) or die("Query UnSucessful!" . mysqli_error($conn)) ;


    header("Location: http://project.loc/Src/Menus/profile.php");
}

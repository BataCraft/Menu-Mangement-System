<?php

include '../../connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $f_name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];



    $sql1 = "UPDATE admin SET a_name = '$f_name', a_email = '$email', a_phone = '$phone' WHERE id = $id ";

    // echo $sql1;
    $data = mysqli_query($conn, $sql1) or die("Query UnSucessful!" . mysqli_error($conn));


    header("Location: http://project.loc/admin/pages/");
}

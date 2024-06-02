<?php

// Delete Account 

include "../../connection.php";

session_start();

$user_id = $_GET['uid'];


$delete_data = "DELETE FROM user WHERE uid = {$user_id}";

$result = mysqli_query($conn, $delete_data) or die("Query UnSucessful!" . mysqli_error($conn)) ;

header("Location: http://project.loc/Src//login/login.php");
session_unset();
session_destroy();

// Close connection
$conn->close();






?>
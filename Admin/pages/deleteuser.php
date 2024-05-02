<?php


include '../../connection.php';

$user_id = $_GET['uid'];

$sql = "DELETE FROM user WHERE uid = $user_id";

// echo $sql;
$data = mysqli_query($conn, $sql) or die ("Something Went Wrong!");

header("Location: http://project.loc/admin/pages/view.php");

mysqli_close($conn);

?>
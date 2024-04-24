<?php 
include '../../connection.php';
$admin_id = $_GET['id'];


$sql =" DELETE FROM admin WHERE id = $admin_id";

$result = mysqli_query($conn, $sql) or die ("Something Went Wrong!");


header("Location: http://project.loc/admin/pages/alladminpage.php" );

mysqli_close($conn);
?>


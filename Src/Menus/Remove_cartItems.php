<?php
include "../../connection.php";

$id = $_GET['id'];

// !SQL Query For Removing Items From Cart
$query = "DELETE FROM cart WHERE id='$id'";
$sqli = mysqli_query($conn, $query) or die ("Soemthing Went Wrong!"  . $conn->error);
// echo $query;

echo "<script>

window.location.href = 'http://project.loc/Src/Menus/cart.php';


</script>";







?>


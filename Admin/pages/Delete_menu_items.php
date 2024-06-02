<?php

include "../../connection.php";


$item_id = $_GET['id'] ;

$delete_menu_items = "DELETE FROM menu_items WHERE item_id = $item_id";


$data = mysqli_query($conn, $delete_menu_items) or die ("Something Went Wrong!" . $conn->error);

header("Location: http://project.loc/Admin/pages/menu_items.php");

mysqli_close($conn);



?>
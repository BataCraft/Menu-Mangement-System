<?php 

    session_start();
    session_unset();
    session_destroy();

//     include "../../connection.php";

//     // Close connection
// $conn->close();

    header("Location: http://project.loc/admin/");



?>
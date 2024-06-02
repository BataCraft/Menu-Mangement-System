<?php
session_start();

session_unset();

session_destroy();


// $conn->close();

header("Location: http://project.loc/");

?>
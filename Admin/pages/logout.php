<?php 

    session_start();
    session_unset();
    session_destroy();

    header("Location: http://project.loc/admin/");



?>
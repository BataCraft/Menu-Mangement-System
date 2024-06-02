<?php 
$host = 'localhost';
$user = 'root';
$password = '';
// $password = '!23$567890';
$db_name = 'menu_mgnt';


$conn = new mysqli($host, $user, $password, $db_name);


if($conn)
{
    // echo "Connect sucessfully";

}

else echo "something went wrong";
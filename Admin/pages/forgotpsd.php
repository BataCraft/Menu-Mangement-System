

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <style>
        .main{
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* background-color: red; */
        }
        #phone{
            width: 200px;
            height: 30px;
            border: 1px solid black;
            border-radius: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="main">
        <form action="" method="post">
            <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <button type="submit" name="change">Next</button>
                </form>
    </div>
    
</body>
</html>

<?php

include '../../connection.php';

if(isset($_POST['change']))
{
    $phone =  $_POST['phone'];
    $sql = "SELECT id, a_phone, a_email FROM admin WHERE a_phone = $phone";

    $querry = mysqli_query($conn, $sql) or die('Something went Wrong!');
// print_r($querry) ;

    if(mysqli_num_rows($querry) > 0)
    {
       while($row = mysqli_fetch_assoc($querry))
       {
        session_start();

        $_SESSION['id'] = $row['id'];
        $_SESSION['phone'] = $row['a_phone'];
        $_SESSION['email'] = $row['a_email'];
        header("Location: http://project.loc/admin/pages/newpsd.php");
       }
    }

}



?>
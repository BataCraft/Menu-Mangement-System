<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <?php
    
    include '../../connection.php';
    
    session_start();

    // $user_id = $_GET['uid'];


    // echo $user_id;
    

    
    ?>

<div id="main">

<div>
    <h1>User Profile</h1>

    <div class="user_details">

    <div class="details">
        <h3>User Name</h3>
        <h4>Saroj</h4>
    </div>
        

    <div class="details">
        <h3>User Name</h3>
        <h4>Saroj</h4>
    </div>
        

    <div class="details">
        <h3>User Name</h3>
        <h4>Saroj</h4>
    </div>
        

    <div class="details">
        <h3>User Name</h3>
        <h4>Saroj</h4>
    </div>
        
    <a href="./update.php?uid=<?php echo $_SESSION['id']; ?>">Update Profile</a>

    </div>
</div>
</div>




</body>
</html>
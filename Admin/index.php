
<?php
include "../Src/header.php";
include "../connection.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Assets/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../Src/CSS/style.css">

    <!-- Custome CSS -->
    <!-- <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../CSS/login_register.css"> -->
    <!-- ======================================================= -->
    <title>Login</title>
</head>
<body>
    <div id="warpper">
        <div id="main">

        
        <div class="field_group">
            <form action="<?php $_SERVER ["PHP_SET"]?>" method="POST">
                <h1>Login</h1>
                <div class="fields">
                    <input type="text" placeholder="Enter Your Email Address" value="" name="email" title="email" required>
                    <input type="password" placeholder="Enter Your Password" value="" name="password" required title="password">
                    <a href="">forgot password?</a>
                </div>

               

                <div>
                    <div class="login_btn">
                        <button type="submit" name="submit">Login</button>
                    </div>
                   
                </div>

               
            </form>
        </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset("submit")){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];


    $sql = "SELECT "
}


?>
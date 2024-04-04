
<?php
include "../header.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Assets/favicon.ico" type="image/x-icon">



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
            <form action="#">
                <h1>Login</h1>
                <div class="fields">
                    <input type="text" placeholder="Enter Your Email / Username" value="" name="email" title="email">
                    <input type="password" placeholder="Enter Your Password" value="" name="password">
                </div>

               

                <div>
                    <div class="login_btn">
                        <button type="submit" name="submit">Login</button>
                    </div>
                    <a href="">forgot password?</a>
                </div>

                <div class="create_account">
                    <a href="" title="Create an Account">Create an account</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>
</html>
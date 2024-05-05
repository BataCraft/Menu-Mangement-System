<?php
include "../Src/header.php";

// session_start();

// if(!isset($_SESSION['email']) )
// {
//     header("Location: http://project.loc/admin/pages/");

// }

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
                <form action="" method="POST" id="loginForm" name="login" onsubmit="return validateform()">
                    <h1>Login</h1>
                    <div class="fields">
                        <input type="text" placeholder="Enter Your Email Address" value="" name="email" title="email" id="email">
                        <span style="color: red;" id="error"></span>
                    </div>
                    <div class="fields">
                        <input type="password" placeholder="Enter Your Password" value="" name="password" title="password" id="password">

                        <span style="color: red;" id="error"> </span>
                        <a href="../Admin/pages/forgotpsd.php">forgot password?</a>
                    </div>


                    <div>
                        <div class="login_btn">
                            <button type="submit" name="login" id="login" >Login</button>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>

    <script>
    function validateForm() {
      var emailInput = document.getElementById("email");
      var passwordInput = document.getElementById("password");

      document.getElementById("error").innerHTML = "";

      if (emailInput.value.trim() === "") {
        document.getElementById("error").innerHTML = "Please enter your email address.";
        emailInput.focus();
        return false;
      }

      if (passwordInput.value.trim() === "") {
        document.getElementById("error").innerHTML = "Please enter your password.";
        passwordInput.focus();
        return false;
      }

      return true;
    }
  </script>

</body>

</html>

<?php

if (isset($_POST['login'])) {
    include "../connection.php";

    $email = $_POST['email'];
    // $password = $_POST['password'];
    $password = sha1($_POST['password']);

    $sql = " SELECT id, a_email, a_password FROM admin WHERE a_email = '$email' AND a_password = '$password' ";

    
    $querry = mysqli_query($conn, $sql) or die('Something went Wrong!');
    // echo $querry;


    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['a_email'];
            $_SESSION['psd'] = $row['a_password'];
            header("Location: http://project.loc/admin/pages/");
        }
    } 
    // else {
    //     echo "<script>alert('Plese Enter your Email and Password!');</script>";
    // }
}

?>
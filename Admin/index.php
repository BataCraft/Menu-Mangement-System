<?php
include "../Src/header.php";


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
                <form action="" method="POST" name="loginForm">
                    <h1>Login</h1>

                    <div id="errorMessage" style="display: none; color: red;">Invalid username or password</div>
                    <div class="fields">
                        <input type="text" placeholder="Enter Your Email Address" value="" name="email" title="email"
                            id="email">
                        <span style="color: red;" id="error"></span>
                    </div>
                    <div class="fields">
                        <input type="password" placeholder="Enter Your Password" value="" name="password"
                            title="password" id="password">

                        <span style="color: red;" id="error"> </span>
                        <a href="../Admin/pages/forgotpsd.php">forgot password?</a>
                    </div>


                    <div>
                        <div class="login_btn">
                            <button type="submit" name="login" id="login" >Login</button>
                        </div>

                    </div>
                    <div id="errorMessage" style="display: none; color: red;">Invalid username or password</div>

                </form>
            </div>
        </div>
    </div>


<script>
      // Check if the session variable or flag is set
  <?php if (isset($_SESSION['login_error']) && $_SESSION['login_error']) { ?>
    document.getElementById('errorMessage').style.display = 'block';
 <?php } ?>
</script>

  <script src="../Admin/validation.js"></script>

</body>

</html>

<?php

if (isset($_POST['login'])) {
    include "../connection.php";

    $email = $_POST['email'];
    // $password = $_POST['password'];
    $password = sha1($_POST['password']);

    $sql = " SELECT id, a_email, a_password, a_name FROM admin WHERE a_email = '$email' ";

    $query = mysqli_query($conn, $sql) or die('Something went Wrong!');




    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['a_email'];
        $_SESSION['password'] = $row['a_password'];
        $_SESSION['admin_name'] = $row['a_name'];

        if($row["a_email"] != $email) {
            echo "<script>alert('Your Password is incorrect!');</script>";
            exit();
        }
        // checking password
       elseif ($row["a_password"] == $password) {

            // if password is correct Redirect to admin page
            header("Location: http://project.loc/Admin/pages/home.php");
            exit(); // Exit to prevent further execution
        } else {
            // pasword is incorrect 
            echo "<script>alert('Your Password is incorrect!');</script>";
            exit(); // Exit to prevent further execution
        }
    } else {
        $_SESSION['errorMsg'] = true;
    }
}
?>

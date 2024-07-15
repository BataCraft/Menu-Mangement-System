<?php
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    include '../../connection.php';
    error_reporting(E_ALL);
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "SELECT uid, fname, uphone, uemail, password FROM user WHERE uemail = '$email' AND password = '$password' ";



    $result = mysqli_query($conn, $sql) or die("Something worng!");

  

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['id'] = $row['uid'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['email'] = $row['uemail'];
            $_SESSION['psd'] = $row['password'];
            $_SESSION['phone'] = $row['uphone'];

            header("location: http://project.loc/Src/Menus/");
            exit();
        }
    } else {
        $_SESSION['login_error'] = true;
    }
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Css LINK -->
    <link rel="stylesheet" href="../CSS/register.css">

    <style>
        .errorMsg {
            color: red;
            font-size: 0.8em;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div id="warpper">
        <div id="main">
            <div id="container" style="width: 30rem;">
                <form action="#" method="POST" id="login_form">
                    <h1>Login Pages</h1>
                    <div id="errorMessage" style="display: none; color: red; font-size: 1.5rem;">Invalid Email or password</div>
                    <section>
                        <!-- user email -->
                        <div class="fields">
                            <label for="email">Email Address</label>
                            <input type="email" value="" placeholder="Enter your email address" id="email" name="email">
                            <span id="emailError" class="errorMsg"></span>
                        </div>

                        <!-- User password -->
                        <div class="fields">
                            <label for="password">Password</label>
                            <input type="password" value="" placeholder="Enter your password" name="password" id="password">
                            <span id="passwordError" class="errorMsg"></span>
                        </div>
                    </section>

                    <!-- Submit button -->
                    <div class="login_btns">
                        <div class="btn">
                            <button name="submit" type="submit" id="login">Login</button>
                        </div>

                        <div class="btn" id="register">
                            <hr>
                            <button name="register" id="register">
                                <a href="./register.php" style="color: #ffff;">Register</a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const loginForm = document.getElementById('login_form');
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        function validateEmail() {
            if (emailInput.value.trim() === '') {
                emailError.textContent = 'Please enter your email address.';
                return false;
            } else if (!emailRegex.test(emailInput.value.trim())) {
                emailError.textContent = 'Please enter a valid email address.';
                return false;
            } else {
                emailError.textContent = '';
                return true;
            }
        }

        function validatePassword() {
            if (passwordInput.value.trim() === '') {
                passwordError.textContent = 'Please enter your password.';
                return false;
            } else {
                passwordError.textContent = '';
                return true;
            }
        }

        emailInput.addEventListener('input', validateEmail);
        passwordInput.addEventListener('input', validatePassword);

        loginForm.addEventListener('submit', function(e) {
            const isEmailValid = validateEmail();
            const isPasswordValid = validatePassword();

            if (!isEmailValid || !isPasswordValid) {
                e.preventDefault();
            }
        });

        // Check if the session variable or flag is set
        <?php if (isset($_SESSION['login_error']) && $_SESSION['login_error']) { ?>
            document.getElementById('errorMessage').style.display = 'block';
        <?php } ?>
    </script>
</body>

</html>
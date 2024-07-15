<?php include "../Src/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../Src/CSS/style.css">
    <title>Login</title>
</head>
<body>
    <div id="warpper">
        <div id="main">
            <div class="field_group">
                <form action="" method="POST" name="loginForm" onsubmit="return validateForm()">
                    <h1>Admin Login</h1>
                    <div id="errorMessage" style="display: none; color: red;">Invalid username or password</div>
                    <div class="fields">
                        <input type="text" placeholder="Enter Your Email Address" value="" name="email" title="email"
                            id="email" oninput="validateEmail()">
                        <span style="color: red; font-size: 20px; font-weight: 500;" id="emailError"></span>
                    </div>
                    <div class="fields">
                        <input type="password" placeholder="Enter Your Password" value="" name="password"
                            title="password" id="password" oninput="validatePassword()">
                        <span style="color: red; font-size: 20px; font-weight: 500;" id="passwordError"></span>
                    </div>
                    <div>
                        <div class="login_btn">
                            <button type="submit" name="login" id="login">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function validateEmail() {
        var email = document.getElementById('email').value;
        var emailError = document.getElementById('emailError');
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === '') {
            emailError.textContent = 'Email is required';
        } else if (!emailRegex.test(email)) {
            emailError.textContent = 'Invalid email format';
        } else {
            emailError.textContent = '';
        }
    }

    function validatePassword() {
        var password = document.getElementById('password').value;
        var passwordError = document.getElementById('passwordError');

        if (password === '') {
            passwordError.textContent = 'Password is required';
        } else if (password.length < 6) {
            passwordError.textContent = 'Password must be at least 6 characters long';
        } else {
            passwordError.textContent = '';
        }
    }

    function validateForm() {
        validateEmail();
        validatePassword();

        var emailError = document.getElementById('emailError').textContent;
        var passwordError = document.getElementById('passwordError').textContent;

        return emailError === '' && passwordError === '';
    }

    // Check if the session variable or flag is set
    <?php if (isset($_SESSION['login_error']) && $_SESSION['login_error']) { ?>
        document.getElementById('errorMessage').style.display = 'block';
    <?php } ?>
    </script>

</body>
</html>

<?php
if (isset($_POST['login'])) {
    include "../connection.php";

    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "SELECT id, a_email, a_password, a_name FROM admin WHERE a_email = '$email'";
    $query = mysqli_query($conn, $sql) or die('Something went Wrong!');

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['a_email'];
        $_SESSION['password'] = $row['a_password'];
        $_SESSION['admin_name'] = $row['a_name'];

        if ($row["a_email"] != $email) {
            echo "<script>alert('Your Email is incorrect!');</script>";
            exit();
        } elseif ($row["a_password"] == $password) {
            header("Location: http://project.loc/Admin/pages/home.php");
            exit();
        } else {
            echo "<script>alert('Your Password is incorrect!');</script>";
            exit();
        }
    } else {
        $_SESSION['errorMsg'] = true;
    }
}
?>
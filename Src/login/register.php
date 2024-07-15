<?php
// session_start();
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    error_reporting(E_ALL);
    include '../../connection.php';

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = sha1($_POST['password']);
    $cpassword = sha1($_POST['cpassword']);
    // $message = '';


    // Checking email is already exist of not In Database...
    $check = "SELECT * FROM user WHERE uemail = '$email'";

    $data_check = mysqli_query($conn, $check);
    //check if the email is already exits in database
    if (mysqli_num_rows($data_check) > 0) {
        // Use PHP to echo JavaScript after DOM is loaded
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    if (document.getElementById("emailError")) {';
        echo '        document.getElementById("emailError").textContent = "Email already exists";';
        echo '    }';
        echo '});';
        echo '</script>';
    } else {


        // the next step when the user enter email is while not exist in database......
        $sql = "INSERT INTO user (fname, uemail, uphone, address, password, cpassword) VALUES ('$fname', '$email', '$phone', '$address', '$password', '$cpassword') ";


        $query = mysqli_query($conn, $sql) or die("something went wrong");

        header("Location: http://project.loc/Src//login/login.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New User</title>
    <!-- Css Link -->
    <!-- <link rel="stylesheet" href="../../main.css"> -->
    <link rel="stylesheet" href="../CSS/register.css">

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div id="Warpper">
        <div id="main">
            <div class="container">
                <form id="user_register" onsubmit="return validateForm()" action="#" method="POST">
                    <h1>Register New User!</h1>
                    <section>
                        <!-- User Full Name -->
                        <div class="fields">
                            <label for="fname">Full Name <span style="color: red;">*</span></label>
                            <input type="text" name="fname" id="fname" placeholder="Enter Your Full Name" value="">
                            <span class="error" id="fnameError"></span>
                        </div>
                        <!-- User Email -->
                        <div class="fields">
                            <label for="email">Email <span style="color: red;">*</span></label>
                            <input type="text" name="email" id="email" placeholder="Enter Your Email Address" value="">
                            <span class="error" id="emailError"></span>

                        </div>

                        <!-- User Phone Number -->
                        <div class="fields">
                            <label for="phone">Phone <span style="color: red;"></span></label>
                            <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number" value="">
                            <span class="error" id="phoneError"></span>
                        </div>

                        <!-- User Address -->
                        <div class="fields">
                            <label for="address">Address <span style="color: red;"></span></label>
                            <input type="text" name="address" id="address" placeholder="Enter Your Address" value="">
                            <span class="error" id="addressError"></span>
                        </div>

                        <!-- User password -->
                        <div class="fields">
                            <label for="password">Password <span style="color: red;">*</span></label>
                            <input type="password" name="password" id="password" placeholder="Enter Your Password" value="">
                        </div>

                        <!-- USer Confirm Password -->
                        <div class="fields">
                            <label for="cpassword">Confirm Password <span style="color: red;">*</span></label>
                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" value="">
                            <span class="error" id="cpasswordError"></span>
                        </div>
                    </section>

                    <!-- Submit Button -->
                    <div class="btn">
                        <button type="submit" name="submit" value="submit">Register</button>
                    </div>
                    <div class="link">
                        <a href="./login.php">Already have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm(event) {

            const fnameInput = document.getElementById("fname");
            const emailInput = document.getElementById("email");
            const phoneInput = document.getElementById("phone");
            const addressInput = document.getElementById("address");
            const passwordInput = document.getElementById("password");
            const cpasswordInput = document.getElementById("cpassword");
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            // const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()]).{8,}$/;

            // Reset error messages
            document.querySelectorAll(".error").forEach(span => span.textContent = "");

            // Validate full name
            if (fnameInput.value.trim() === "") {
                document.getElementById("fnameError").textContent = "Please enter your full name.";
                return false;

            }

            // Validate email
            if (emailInput.value.trim() === "") {
                document.getElementById("emailError").textContent = "Please enter your email address.";
                return false;

            } else if (!emailRegex.test(emailInput.value.trim())) {
                document.getElementById("emailError").textContent = "Please enter a valid email address.";
                return false;


            }

            // Validate phone number (optional)
            if (phoneInput.value.trim() !== "" && isNaN(phoneInput.value.trim())) {
                document.getElementById("phoneError").textContent = "Please enter a valid phone number.";
                return false;

            }

            // Validate address (optional)
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            // Validate password
            if (passwordInput.value.trim() === "") {
                passwordError.textContent = "Please enter your password.";
                return false;
            } else if (!passwordRegex.test(passwordInput.value.trim())) {
                passwordError.textContent = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character.";
                return false;
            } else {
                passwordError.textContent = ""; // Clear any previous error message
            }

            // Validate confirm password
            if (cpasswordInput.value.trim() === "") {
                cpasswordError.textContent = "Please confirm your password.";
                return false;
            } else if (passwordInput.value.trim() !== cpasswordInput.value.trim()) {
                cpasswordError.textContent = "Passwords do not match.";
                return false;
            } else {
                cpasswordError.textContent = ""; // Clear any previous error message
            }

            return true;
        }
        
    </script>
</body>

</html>
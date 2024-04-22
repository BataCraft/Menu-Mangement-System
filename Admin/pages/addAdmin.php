<?php 
 include '../../connection.php';
//  error_reporting(E_ALL);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./addadmin.css">
</head>
<body>
    <div>
        <div id="main">
            <form action="#" method="POST" >
                <div class="container">

                <!-- New Admin Name -->
                    <div class="input_fields">
                        <label for="fullname">Full Name <span style="color: red;">*</span></label>
                        <input type="text" name="fullname" id="fullname" placeholder="Enter new admin Full Name" value="" required>
                    </div>

                    <!-- New admin email -->
                    <div class="input_fields">
                        <label for="email">Email <span style="color: red;">*</span></label>
                        <input type="email" name="email" id="eamil" placeholder="Enter Email Address" value="" required>
                    </div>

                    <!-- ----New Admin phone number -->
                    <div class="input_fields">
                        <label for="phone">Phone <span style="color: red;">*</span></label>
                        <input type="number" name="phone" id="phone" placeholder="Enter Phone Number" value="" required>
                    </div>


                <!-- New admin new password -->
                <div class="input_fields">
                        <label for="password">Password <span style="color: red;">*</span></label>
                        <input type="password" name="password" id="password" placeholder="Enter Your password" value="" required>
                    </div>
                <!-- New admin Confirm password -->
                <div class="input_fields">
                        <label for="cpassword">Confirm Password <span style="color: red;">*</span></label>
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confiorm Your password" value="" required>
                    </div>


                </div>

                <div>
                    <button name="submit" id="submit" type="submit"> Create</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>


<?php 

if(isset($_POST['submit']))
{
   
    $f_name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpsd = $_POST['cpassword'];


    $sql = "INSERT INTO admin (a_name, a_email, a_phone, a_password, a_cpassword) VALUES ('$f_name', '$email', '$phone', '$password', '$cpsd')";

    $result = mysqli_query($conn, $sql) or die ("Something Went Wrong!");

    
}

?>
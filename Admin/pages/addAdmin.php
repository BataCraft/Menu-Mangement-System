<?php
include '../../connection.php';
// error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="../pages/addadmin.css">
</head>
<body>
    <div id="warpper">
        <header>
            <div>
                  <?php include '../pages/adminnav.php';?>
                </div>
            <div class="header" style="display: flex; justify-content: space-between; align-items: center; padding: 0 132px; height: 50px; background-color: lightgreen; overflow: hidden;" >

                <h5 style="font-size: 16px; font-weight: normal;">View all admins</h5>
                <button style="padding: 10px 20px; border-radius: 10px;"><a href="../pages/alladminpage.php">View Admin</a></button>
            </div>
        </header>
        <div id="main">
            <form action="" method="POST" id="form_fill"> 
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
                    <!-- New Admin phone number -->
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
                    <button name="submit" id="submit" type="submit"  onclick="verify()">Add</button>
                </div>
            </form>
        </div>

<?php 
if (isset($_POST['submit'])) {
    include '../../connection.php';


   $f_name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = sha1($_POST['password']);
    $cpsd = sha1($_POST['cpassword']) ;

    $sql = "INSERT INTO admin (a_name, a_email, a_phone, a_password, a_cpassword) VALUES ('$f_name', '$email', '$phone', '$password', '$cpsd')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('The new Admin has been created successfully!');</script>";
        // echo "<script>window.open('../index.php', '_self')</script>";
        header("Location: http://project.loc/Admin/pages/alladminpage.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
        
    </div>
    <script>
        // function submitForm(event) {
        //     event.preventDefault(); // Prevent the default form submission
        //
        //     // Perform your form validation or processing here
        //     // Assuming the form is valid...
        //
        //     // Show the popup
        //     alert("Form submitted successfully!");
        //
        //     // You can also reset the form after showing the popup
        //     event.target.reset();

         // }

        let fullname = document.getElementById('fullname'),
        email = document.getElementById('email'),
        phone = document.getElementById('phone'),
        password = document.getElementById('password'),
        cpsd = document.getElementById('cpassword');

        let form = document.getElementById('form_fill');

        // let verify = document.getElementById('submit');

         verify.addEventListener('click', (e)=>{
            if(fullname.value === '' && email.value === '' && phone.value === '' &&  password.value == '' && cpsd == '' ){
                    form_fill.nextElementSibling.innerText = 'Your Firstname is empty ';
                }
                e.preventDefault();
   
         })

           password.addEventListener('keyup', ()=>{
            if(password.value < 8)
            {
            password.nextElementSibling.innerText = 'Your password is less than 8 characters';
            }
           })
       
    </script>
</body>
</html>
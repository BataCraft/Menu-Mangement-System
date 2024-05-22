<?php
include '../../connection.php';
// error_reporting(E_ALL);

$admin_id = $_GET['id'];

$sql = "SELECT * FROM admin WHERE id = $admin_id";

$data = mysqli_query($conn, $sql);



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

<body style="overflow: hidden;">
    <div id="warpper">
        <header>
            <div>
                <?php include '../pages/adminnav.php'; ?>
            </div>

        </header>
        <div id="main">
            <form action="./adminupdate.php" method="POST" id="form_fill">
                <div class="container">
                    <h1>Edit Profile</h1>

                    <?php

                    if (mysqli_num_rows($data) > 0) {

                        while ($row = mysqli_fetch_assoc($data)) {


                    ?>

                            <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
                            <!-- New Admin Name -->
                            <div class="input_fields">
                                <label for="fullname">Full Name <span style="color: red;">*</span></label>
                                <input type="text" name="fullname" id="fullname" placeholder="Enter new admin Full Name" value="<?php echo $row['a_name'] ?>" required>
                            </div>
                            <!-- New admin email -->
                            <div class="input_fields">
                                <label for="email">Email <span style="color: red;">*</span></label>
                                <input type="email" name="email" id="eamil" placeholder="Enter Email Address" value="<?php echo $row['a_email'] ?>" required>
                            </div>
                            <!-- New Admin phone number -->
                            <div class="input_fields">
                                <label for="phone">Phone <span style="color: red;">*</span></label>
                                <input type="number" name="phone" id="phone" placeholder="Enter Phone Number" value="<?php echo $row['a_phone'] ?>" required>
                            </div>

                </div>


        <?php
                        }
                    }
        ?>
        <div>
            <button name="submit" id="submit" type="submit" onclick="verify()">Update</button>
        </div>
            </form>
        </div>


    </div>
    <!-- <script>
        

        let fullname = document.getElementById('fullname'),
            email = document.getElementById('email'),
            phone = document.getElementById('phone'),
            password = document.getElementById('password'),
            cpsd = document.getElementById('cpassword');

        let form = document.getElementById('form_fill');

        let verify = document.getElementById('submit');

        verify.addEventListener('click', (e) => {
            if (fullname.value === '' && email.value === '' && phone.value === '' && password.value == '' && cpsd == '') {
                form_fill.nextElementSibling.innerText = 'Your Firstname is empty ';
            }
            e.preventDefault();

        })

        password.addEventListener('keyup', () => {
            if (password.value < 8) {
                password.nextElementSibling.innerText = 'Your password is less than 8 characters';
            }
        })
    </script> -->
</body>

</html>
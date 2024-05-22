<?php
include '../../connection.php';

session_start();

if(!isset($_SESSION['id'])) {
    header("Location: http://project.loc/admin/pages/");
    exit(); // Ensure that no further code is executed after redirection
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Custome CSS -->
    <link rel="stylesheet" href="../pages/style.css">




    <!-- Remix  Icons CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />



</head>

<body>
    <div id="warpper">
        

        <?php
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM admin WHERE id = $id ";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
            
            
        // }

       

        ?>

        <div class="adminwelcome" style="align-self: flex-start; padding-inline: 400px;">
            <h1 style="font-size: 3rem;">Welcome dear!</h1>
            <h3 style="font-size: 2rem;"><?php  echo  $row['a_name'];  ?> 😊</h3>
        </div>
        
       

        <div class="container">

            <div class="card">
                <a href="../pages/Menu.php">
                    <div class="box">
                        <i class="ri-edit-line"></i>
                        <h3>Menu Edit</h3>
                    </div>
                </a>
            </div>


            <div class="card">
                <a href="../pages/addAdmin.php">
                    <div class="box">
                        <i class="ri-user-add-line"></i>
                        <h3>Add Admin</h3>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="../pages/view.php">
                    <div class="box">
                        <i class="ri-user-3-line" id="view_user" style="color: #ececec;"></i>
                        <h3 style="color: #ececec;">View User</h3>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="../pages/settings.php">
                    <div class="box">
                        <i class="ri-equalizer-line"></i>
                        <h3><a href="./settings.php?id=<?php echo $row['id']?>">Edit Profile</a></h3>
                    </div>
                </a>
            </div>


            <?php }?>
            
            
        </div>
        
        <div id="header">

<button type="submit" name="login" id="logout_btn">
    <a href="logout.php" id="logout_link">Log Out</a></button>
</div>
    </div>

    <!-- <script>
        function redirectToPage(url) {
            window.location.href = url;
        } -->


    <!-- // // Function to detect when the user tries to leave the page
        // window.addEventListener('beforeunload', function (e) {
        //     e.preventDefault(); // Cancel the event
        //     e.returnValue = ''; // Set a blank return value to trigger the browser's default warning message
        // }); -->



    </script>
</body>

</html>


<?php
include '../../connection.php';


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
        $sql = "SELECT * FROM admin";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query)) {

            
        }

        ?>

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
                <a href="../pages/settings.php?id=<?php echo $row['id'] ?> ">
                    <div class="box">
                        <i class="ri-equalizer-line"></i>
                        <h3>Edit Profile</h3>
                    </div>
                </a>
            </div>






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
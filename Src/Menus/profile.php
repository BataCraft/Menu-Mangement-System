<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }

        html, body {
            height: 100%;
            width: 100%;
            background-color: #f5f5f5;
        }

        #main {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            /* padding-left: 20%; */
        }

        #main > .contain {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 36px;
            color: #333333;
            margin-bottom: 20px;
        }

        .user_details {
            display: flex;
            flex-direction: column;
        }

        .details {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .details h3 {
            font-size: 18px;
            color: #666666;
            width: 150px;
        }

        .details h4 {
            font-size: 18px;
            color: #333333;
        }

        a {
            display: inline-block;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    include '../../connection.php';
    session_start();
    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM user WHERE uid = $user_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div id="main">
                <div class="contain">
                    <h1 style="text-align: center; padding-bottom: 32px;">User Profile</h1>
                    <div class="user_details">
                        <div class="details">
                            <h3>Full Name</h3>
                            <h4><?php echo $row['fname'] ?></h4>
                        </div>
                        <div class="details">
                            <h3>Email</h3>
                            <h4><?php echo $row['uemail'] ?></h4>
                        </div>
                        <div class="details">
                            <h3>Phone Number</h3>
                            <h4><?php echo $row['uphone'] ?></h4>
                        </div>
                        <div class="details">
                            <h3>Address</h3>
                            <h4><?php echo $row['address'] ?></h4>
                        </div>
                    </div>

                    <div style="text-align: center;">

                        <a href="./update.php?uid=<?php echo $_SESSION['id']; ?>">Update Profile</a>
                    </div>
                </div>

                <div id="home_btn" style="align-self: end; padding: 10% 10% 0 0;  " >
                    <a href="./index.php">Go Home</a>
                </div>
            </div>
            <?php
        }
    }
    ?>
</body>
</html>
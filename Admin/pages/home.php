<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Custome CSS -->
    <link rel="stylesheet" href="style.css">




    <!-- Remix  Icons CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />



</head>

<body>
    <div id="main">
        <div class="container">
            <div class="section">
                <div class="box">
                    <div class="card">
                        <div class="icon">
                        <i class="ri-user-line"></i>
                        </div>
                        <div class="info">
                            <div name="view" type="submit" class="view_users">View Users</div>
                            <!-- <button>View users</button> -->
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="card">
                        <div class="icon">
                        <i class="ri-edit-line"></i>
                        </div>
                        <div class="info">
                            <div name="view" type="submit" class="view_users">Edit Items</div>
                            <!-- <button>View users</button> -->
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="card">
                        <div class="icon">
                        <i class="ri-user-add-line"></i>
                        </div>
                        <div class="info">
                            <div name="view" type="submit" class="view_users">Add Admin</div>
                            <!-- <button>View users</button> -->
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="card">
                        <div class="icon">
                        <i class="ri-settings-2-line"></i>
                        </div>
                        <div class="info">
                            <div name="view" type="submit" class="view_users">Settings</div>
                            <!-- <button>View users</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" name="logout" class="btn">log out <i class="ri-logout-box-r-line"></i></button>
            </div>
        </div>
    </div>
</body>

</html>
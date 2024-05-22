<!--  -->
<?php
session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>alert('The new Admin has been created successfully!');</script>";
    header("location: http://project.loc/Src/login/login.php");
    exit(); // Add exit() to stop script execution after redirection
}

include '../../connection.php';

$sql = "SELECT * FROM user";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menus</title>


    <!-- icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Menus/style.css">
</head>

<body>
    <div id="Warpper">
        <div id="header">
            <nav>
                <div class="logo">
                    <img src="../Menus/a-sleek-and-sophisticated-logo-for-a-menu-manageme-9JRvYmr9S3-dBqWmU6Is6A-gRyYqVQtR8uOxJHKXV0XJQ.jpeg">
                </div>

                <div class="searchbar">
                    <input type="search" name="search" id="search" placeholder="Search Your Meal">
                    <button type="submit" name="search"><i class="ri-search-2-line"></i></button>
                </div>


                <!-- user -->
                <div class="profile" id="p_icon">
                    <i class="ri-user-line" id="profile_icon"></i>

                    <div class="profile_detail" id="pd">
                        <a href="./profile.php">Profile Edit <span><i class="ri-edit-line"></i></span></a>
                        <a href="../Menus/logout.php">Logout <span><i class="ri-logout-box-line"></i></span></a>
                    </div>
                </div>
            </nav>
        </div>

        <div id="main">
            <h3>Today Special</h3>

            <div class="box">


                <div class="card">
                    <div class="images">
                        <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="details">
                        <div class="name_price">

                            <h2>Samosa</h2>
                            <p>Rs <span>100</span></p>
                        </div>

                        <div class="cart">
                            <i class="ri-shopping-cart-line"></i>
                            <add_cart>Add Cart</add_cart>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="images">
                        <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="details">
                        <div class="name_price">

                            <h2>Samosa</h2>
                            <p>Rs: <span>100</span></p>
                        </div>

                        <div class="cart">
                            <i class="ri-shopping-cart-line"></i>
                            <span>Add Cart</span>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="images">
                        <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="details">
                        <div class="name_price">

                            <h2>Samosa</h2>
                            <p>Rs: <span>100</span></p>
                        </div>

                        <div class="cart">
                            <i class="ri-shopping-cart-line"></i>
                            <span>Add Cart</span>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="images">
                        <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="details">
                        <div class="name_price">

                            <h2>Samosa</h2>
                            <p>Rs: <span>100</span></p>
                        </div>

                        <div class="cart">
                            <i class="ri-shopping-cart-line"></i>
                            <span>Add Cart</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <section id="aptizer">
            <div class="aptizer_items">
                <h1>Aptizer</h1>


                <div class="box">


                    <div class="card">
                        <div class="images">
                            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>

                        <div class="details">
                            <div class="name_price">

                                <h2>Samosa</h2>
                                <p>Rs <span>100</span></p>
                            </div>

                            <div class="cart">
                                <i class="ri-shopping-cart-line"></i>
                                <add_cart>Add Cart</add_cart>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script src="../Menus/main.js"></script>
</body>

</html>
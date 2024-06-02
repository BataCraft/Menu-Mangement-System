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
            <?php
            // include './navbar.php';

            ?>
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

        <div class="main">
            <h3>Aptizzer</h3>

            <div class="box">

                <?php

                $appetizer_items = "SELECT * FROM menu_items WHERE item_category = 'Appetizer' OR  item_category = 'appetizers'";


                $aptizer_data = mysqli_query($conn, $appetizer_items) or die("Query Failed");

                // print_r($aptizer_data);

                if (mysqli_num_rows($aptizer_data) > 0) {
                    while ($row = mysqli_fetch_assoc($aptizer_data)) {





                ?>





                        <div class="card">
                            <div class="top">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            </div>

                            <div class="bottom">
                                <div class="detail">
                                    <h4><?php echo  $row['item_name']; ?></h4>

                                    <p class="price">Rs. <span><?php echo  $row['item_price']; ?></span></p>

                                </div>

                                <div class="cart">
                                    <button>
                                        <a href=""> <i class="ri-shopping-cart-2-line"></i>
                                            <span>Add to cart</span></a>

                                    </button>
                                </div>

                            </div>
                        </div>




                <?php
                    }
                } else {
                    echo "No Data Found";
                }

                ?>
            </div>

        </div>

        <!-- --------------------------------------------------------------------------------------------------------------------------- -->

        <section class="main">
            <h3>entree </h3>


            <div class="box">

                <?php

                $appetizer_items = "SELECT * FROM menu_items WHERE item_category = 'Entrees' OR item_category = 'entrees' ";


                $aptizer_data = mysqli_query($conn, $appetizer_items) or die("Query Failed");

                if (mysqli_num_rows($aptizer_data) > 0) {
                    while ($row = mysqli_fetch_assoc($aptizer_data)) {


                ?>

                        <div class="card">


                            <div class="top">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            </div>

                            <div class="bottom">
                                <div class="detail">
                                    <h4><?php echo  $row['item_name']; ?></h4>
                                    <p class="price">Rs. <span><?php echo  $row['item_price']; ?></span></p>

                                </div>

                                <div class="cart">
                                    <button>
                                        <a href=""> <i class="ri-shopping-cart-2-line"></i>
                                            <span>Add to cart</span></a>

                                    </button>
                                </div>
                            </div>


                        </div>
                <?php
                    }
                } else {
                    echo "No Data Found";
                }

                ?>

            </div>


        </section>




    </div>

    <script src="../Menus/main.js"></script>
</body>

</html>
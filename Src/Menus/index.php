<!--  -->
<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['email'])) {
    echo "<script>alert('The new Admin has been created successfully!');</script>";
    header("location: http://project.loc/Src/login/login.php");
    exit(); // Add exit() to stop script execution after redirection
}

include '../../connection.php';

$sql = "SELECT * FROM user";

$result = mysqli_query($conn, $sql);

$user_id = $_SESSION['id'];

// echo $user_id;

// =================================================

if(isset($_POST['addcart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_qty = 1;

    $sql = "SELECT * FROM cart WHERE product_name = '$product_name'  AND user_id = '$user_id'";
    $items_exists = mysqli_query($conn, $sql);

    
    // Check if the product already exists in the cart
    if (mysqli_num_rows($items_exists) > 0) {
        $display_err = "The Product has been added Already!";
        
    }


    
else{
    $cart_insert = "INSERT INTO cart (user_id, product_name, price_per_unit, product_image, quantity) VALUES ('$user_id','$product_name', '$product_price', '$product_image', '$product_qty')";

    $cart_data = mysqli_query($conn, $cart_insert) or die ("Data Not Inserted" .  mysqli_error($conn));

    if($cart_data)
    {
        $display_err = "The Product has been added Sucessfully!";
    }

}
}



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
        <div class="cart_icons" title="cart">

            <a href="./cart.php"> <i class="ri-shopping-cart-2-line"></i></a>
            <div class="cart_counter">
                <!-- !For Show Counting Of The CART -->
                 <?php
                 $select_data = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = $user_id") or die ("Something Wnet Wrong");

                 $row_count = mysqli_num_rows($select_data);
                 
                 echo $row_count;
                 
                 ?>
                
            </div>
        </div>
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


        <div class="main">
        <?php
    if (isset($display_err)) {
        echo "<div style='color: #FFFFFF; position: fixed top: 0; margin-bottom: 20px; background-color: #4CAF50; padding: 20px; width:40rem;'> " . $display_err .  "<span style='margin-left:40%; color:white; cursor: pointer;' onclick='this.parentElement.style.display = `none`' ><i class='ri-xrp-line'></i></span></div>";
    }
    ?>
            
            <h3>Aptizzer</h3>
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="box" >

                    <?php
                    $appetizer_items = "SELECT * FROM menu_items WHERE item_category = 'Appetizer' OR item_category = 'appetizers'";
                    $aptizer_data = mysqli_query($conn, $appetizer_items) or die("Query Failed: " . mysqli_error($conn));


                    // print_r($aptizer_data);

                    if (mysqli_num_rows($aptizer_data) > 0) {
                        while ($row = mysqli_fetch_assoc($aptizer_data)) {





                    ?>

                            <div class="card">
                                <div class="top">
                                    <img src="<?php echo $row['image'] ?>" alt="">


                                </div>

                                <div class="bottom">
                                    <div class="detail">
                                        <h4><?php echo  $row['item_name']; ?></h4>

                                        <p class="price">Rs. <span><?php echo  $row['item_price']; ?></span></p>

                                    </div>

                                    <div class="cart">
                                        <button name="addcart" id="addcart">
                                            <a href=""> <i class="ri-shopping-cart-2-line"></i>
                                            <input type="hidden" name="product_name" id="product_name" value="<?php echo  $row['item_name']; ?>">

                                            <input type="hidden" name="product_price" id="product_price" value="<?php echo  $row['item_price']; ?>">
                                            <input type="hidden" name="product_image" id="product_image" value="<?php echo $row['image'] ?>">
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

            </form>
        </div>

        <!-- --------------------------------------------------------------------------------------------------------------------------- -->

        <section class="main">
            <h3>entree </h3>


            <form action="" method="POST" enctype="multipart/form-data">

                <div class="box" >

                    <?php
                    $appetizer_items = "SELECT * FROM menu_items WHERE item_category = 'Entrees' OR item_category = 'entrees'";
                    $aptizer_data = mysqli_query($conn, $appetizer_items) or die("Query Failed: " . mysqli_error($conn));


                    // print_r($aptizer_data);

                    if (mysqli_num_rows($aptizer_data) > 0) {
                        while ($row = mysqli_fetch_assoc($aptizer_data)) {





                    ?>

                            <div class="card">
                                <div class="top">
                                    <img src="../../Admin/pages/items_images/<?php echo $row['image'] ?>" alt="">

                                
                                </div>

                                <div class="bottom">
                                    <div class="detail">
                                        <h4><?php echo  $row['item_name']; ?></h4>

                                        <p class="price">Rs. <span><?php echo  $row['item_price']; ?></span></p>

                                    </div>

                                    <div class="cart">
                                        <button name="addcart" id="addcart">
                                            <a href=""> <i class="ri-shopping-cart-2-line"></i>
                                            <input type="hidden" name="product_name" id="product_name" value="<?php echo  $row['item_name']; ?>">

                                            <input type="hidden" name="product_price" id="product_price" value="<?php echo  $row['item_price']; ?>">
                                            <input type="hidden" name="product_image" id="product_image" value="<?php echo $row['image'] ?>">
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

            </form>

        </section>


        <!-- --------------------------------------------------------------------------------------------------------------------------- -->

        <section class="main">
            <h3>Desserts </h3>


            <form action="" method="POST" enctype="multipart/form-data">

                <div class="box" >

                    <?php
                    $appetizer_items = "SELECT * FROM menu_items WHERE item_category = 'Desserts' OR item_category = 'desserts'";
                    $aptizer_data = mysqli_query($conn, $appetizer_items) or die("Query Failed: " . mysqli_error($conn));


                    // print_r($aptizer_data);

                    if (mysqli_num_rows($aptizer_data) > 0) {
                        while ($row = mysqli_fetch_assoc($aptizer_data)) {





                    ?>

                            <div class="card">
                                <div class="top">
                                    <img src="<?php echo $row['image'] ?>" alt="">


                                </div>

                                <div class="bottom">
                                    <div class="detail">
                                        <h4><?php echo  $row['item_name']; ?></h4>

                                        <p class="price">Rs. <span><?php echo  $row['item_price']; ?></span></p>

                                    </div>

                                    <div class="cart">
                                        <button name="addcart" id="addcart">
                                            <a href=""> <i class="ri-shopping-cart-2-line"></i>
                                            <input type="hidden" name="product_name" id="product_name" value="<?php echo  $row['item_name']; ?>">

                                            <input type="hidden" name="product_price" id="product_price" value="<?php echo  $row['item_price']; ?>">
                                            <input type="hidden" name="product_image" id="product_image" value="<?php echo $row['image'] ?>">
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

            </form>

        </section>




        <!-- --------------------------------------------------------------------------------------------------------------------------- -->

        <section class="main">
            <h3>Beverages </h3>


            <form action="" method="POST" enctype="multipart/form-data">

                <div class="box" >

                    <?php
                    $appetizer_items = "SELECT * FROM menu_items WHERE item_category = 'Beverages' OR item_category = 'beverages'";
                    $aptizer_data = mysqli_query($conn, $appetizer_items) or die("Query Failed: " . mysqli_error($conn));


                    // print_r($aptizer_data);

                    if (mysqli_num_rows($aptizer_data) > 0) {
                        while ($row = mysqli_fetch_assoc($aptizer_data)) {





                    ?>

                            <div class="card">
                                <div class="top">
                                    <img src="<?php echo $row['image'] ?>" alt="">


                                </div>

                                <div class="bottom">
                                    <div class="detail">
                                        <h4><?php echo  $row['item_name']; ?></h4>

                                        <p class="price">Rs. <span><?php echo  $row['item_price']; ?></span></p>

                                    </div>

                                    <div class="cart">
                                        <button name="addcart" id="addcart">
                                            <a href=""> <i class="ri-shopping-cart-2-line"></i>
                                            <input type="hidden" name="product_name" id="product_name" value="<?php echo  $row['item_name']; ?>">

                                            <input type="hidden" name="product_price" id="product_price" value="<?php echo  $row['item_price']; ?>">
                                            <input type="hidden" name="product_image" id="product_image" value="<?php echo $row['image'] ?>">
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

            </form>

        </section>




    </div>

    <script src="../Menus/main.js"></script>
</body>

</html>


<?php


   




?>
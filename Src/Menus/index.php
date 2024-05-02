<!--  -->
<?php
session_start();

if(!isset($_SESSION['email'])){
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
        <div id="Header">
            <nav>
                <div class="left_nav">
                    <ul>
                        <li><a href="index.php" >HOME</a></li>
                        <li><a href="menu.php">MENU</a></li>
                        <?php
                        // while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <li><a href="profile.php?uid=<?php echo $row['uid']?>">PROFILE</a></li>
                        <?php
                    //  }
                     ?>
                        <li><a href="orders.php">ORDERS</a></li>
                    </ul>
                </div>
                <div class="middle_nav">
                    <img src="../../Assets/logo.jpeg" alt="">
                </div>
                <div class="right_nav">
                    <input type="search" name="search" value="" id="search" placeholder="Search your meal"> <button id="search_btn"><i class="ri-search-line"></i></button>
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


    


    </div>

</body>

</html>
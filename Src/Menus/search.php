<?php
include '../../connection.php';

if(isset($_GET['query'])) {
    $search = mysqli_real_escape_string($conn, $_GET['query']);
    $sql = "SELECT * FROM menu_items WHERE item_name LIKE '%$search%' OR item_category LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='search-item'>";
            
            echo "</div>";

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
                                        <button id="addcart">
                                            <span class="a">
                                                <input type="hidden" name="product_name" id="product_name" value="<?php echo  $row['item_name']; ?>">
                                                <input type="hidden" name="product_id" id="product_id" value="<?php echo  $row['item_id']; ?>">
                                                <input type="hidden" name="product_price" id="product_price" value="<?php echo  $row['item_price']; ?>">
                                                <input type="hidden" name="product_image" id="product_image" value="<?php echo $row['image'] ?>">
                                                <a href="AddingCart.php?id=<?php echo $row['item_id']?>" class="btns" type="submit" name="addcart"> <i class="ri-shopping-cart-2-line"></i>Add to cart</a></span>

                                        </button>
                                    </div>

                                </div>
                            </div>



<?php
        }
    } else {
        echo "<p>No results found</p>";
    }
}
?>
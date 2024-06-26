
<?php

include "../../connection.php";

session_start();

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM cart WHERE user_id = $user_id";

$result = mysqli_query($conn, $sql);

if(isset($_POST['submit']))
{
    $item_id = $_POST['item_id'];
    $item_quantity = $_POST['item_quantity'];

    $update_items = "UPDATE cart set quantity = $item_quantity WHERE id = $item_id";

    $data = mysqli_query($conn, $update_items);

    if($data){
        // echo "Item quantity updated successfully";
        header("http://project.loc/Src/Menus/cart.php");
    }
    else{
        echo "Something went wrong " .    mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

.product-info {
    display: flex;
    align-items: center;
}

.product-info img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

.remove-btn {
    background-color: #ff4d4d;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.cart-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.btn {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
}

.checkout {
    background-color: #2196F3;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Shopping Cart</h1>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>

            <?php
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result)){
               
            
            
            ?>
                <tr>
                    <td>
                        <div class="product-info">
                            <img src="<?php echo $row['product_image']?>" alt="Product Image">
                            <div>
                                <p><?php echo $row['product_name']?></p>
                                
                            </div>
                        </div>
                    </td>
                    <td><?php echo $row['price_per_unit']?></td>
                    <td>
                        
                       <form action="" method="POST">
                            <input type="hidden" value="<?php echo $row['id']?>" name="item_id">
                            <input type="number" value="<?php echo $row['quantity']?>"  name="item_quantity">
                            <input type="submit" value="Update" name="submit" class="add_items">
                       </form>
                </td>
                    <td><?php echo $row['total_price']?></td>
                    <td><a href="./Remove_cartItems.php?id=<?php echo $row['id']?>" class="remove-btn"  onclick="return confirm('Are you sure to remove Items?')">Remove</a></td>
                </tr>

                <?php
                
            }
        } 
        else{
            echo "<span style='color: red; font-size:18px; font-weight:700;'>No Product Available!</span>";
        }
                
                ?>
                <!-- Add more product rows here -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td><?php ?></td>

                    <td></td>
                </tr>
            </tfoot>
        </table>
        <div class="cart-actions">
            <a href="./index.php" class="btn">Add Items</a>
            <a href="#" class="btn checkout">Proceed to Checkout</a>
        </div>
    </div>
    <script>

document.getElementById('update-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    var form = event.target;
    var formData = new FormData(form);

    // Submit the form to the hidden iframe
    form.submit();

    // After form submission, update the displayed quantity
    form.querySelector('input[name="item_quantity"]').value = formData.get('item_quantity');
    document.getElementById('message').innerHTML = 'Item quantity updated successfully';
});
</script>






    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Add Menu Item</title>
    <link rel="stylesheet" href="./menu_css/Addmenu_items.css">
</head>
<body>

<?php 
if(isset($display_msg)){
    echo "<script>alert('$display_msg');</script>";
    header("Location: http://project.loc/Admin/pages/menu_items.php");
}



?>
    <h1>Add Menu Item</h1>
    <form method="post" action="#" enctype="multipart/form-data">
        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" required><br>

        <label for="item_price">Item Price:</label>
        <input type="number" id="item_price" name="item_price" step="0.01" required><br>

        <label for="item_category">Item Category:</label>
        <select id="item_category" name="item_category">
            <option value="appetizers">Appetizers</option>
            <option value="entrees">Entrees</option>
            <option value="desserts">Desserts</option>
            <option value="beverages">Beverages</option>
        </select><br>

        <label for="item_image">Item Image:</label>
        <input type="file" id="item_image" name="item_image" accept="image/*" ><br>

        <input type="submit" name="submit" value="Add Item">
    </form>
</body>
</html>


<?php
if(isset($_POST["submit"]))
{
    include "../../connection.php";

    $item_name = $_POST["item_name"];
    $item_price = $_POST["item_price"];
    $item_category = $_POST["item_category"];
    
// !!Import Images / FILES
    $img_name = $_FILES["item_image"] ["name"];
    $item_temp_name = $_FILES["item_image"] ["tmp_name"];
    $item_img = "../../Admin/pages/items_images/" . $img_name;



    

    $sql = "INSERT INTO menu_items (item_name, item_price,  item_category, image) VALUES ('$item_name', '$item_price', '$item_category', '$item_img')";

    $result = mysqli_query($conn, $sql) or die ("Data Inserted Query Failed!");


    if($result)
    {
        move_uploaded_file($item_temp_name, $item_img);
        echo "<script>alert('The new Items has been added successfully!');</script>";
        header("Location: http://project.loc/Admin/pages/menu_items.php");
        
    }
else{
    echo "<script>alert('Failed to add new item!');</script>";
}
    // echo $sql;


    
}




?>
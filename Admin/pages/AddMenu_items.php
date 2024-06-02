<!DOCTYPE html>
<html>
<head>
    <title>Add Menu Item</title>
    <link rel="stylesheet" href="./menu_css/Addmenu_items.css">
</head>
<body>
    <h1>Add Menu Item</h1>
    <form method="post" action="insert_menu_item.php" enctype="multipart/form-data">
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
        <input type="file" id="item_image" name="item_image" accept="image/*" required><br>

        <input type="submit" name="submit" value="Add Item">
    </form>
</body>
</html>


<?php





?>
<?php

include "../../connection.php";

$item_id = $_GET['id'];

// echo $item_id;

$sql = "SELECT * FROM menu_items WHERE item_id = $item_id";


$result = mysqli_query($conn, $sql)  or die ("Something wrong!");

// print_r($result) ;



?>






<!DOCTYPE html>
<html>
<head>
    <title>Add Menu Item</title>
    <link rel="stylesheet" href="./menu_css/Addmenu_items.css">
</head>
<body>
    <h1>Add Menu Item</h1>
    <form method="post" action="" enctype="multipart/form-data">

    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
    ?>
        <!-- id -->
        <input type="hidden" name="id" id="item_id" value="<?php echo  $row['item_id']?>" >


        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" value="<?php echo  $row['item_name']?>" required><br>

        <label for="item_price">Item Price:</label>
        <input type="number" id="item_price" name="item_price" step="0.01" value="<?php echo  $row['item_price']?>" required><br>

        <label for="item_category">Item Category:</label>
        <?php
    
        // for Select user select option
        if($row['item_category'] == $row['item_category'] ){
            $select = "selected";

        }
        else{
            $select = "";
        }
        ?>
        <select id="item_category" name="item_category">
            <option <?php  echo $select?> value="appetizers"><?php echo $row['item_category']?></option>

            <option  value="entrees">Entrees</option>
            <option value="desserts">Desserts</option>
            <option value="beverages">Beverages</option>
        </select><br>
        <?php
        //   }
        // }
        
        ?>

        <label for="item_image">Item Image:</label>
        <input type="file" id="item_image" name="item_image" accept="image/*" ><br>

        <input type="submit" name="submit" value="Update Item">

        <?php
          }
        }
        
        ?>
    </form>
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_category = $_POST['item_category'];
    // $item_image = $_FILES['item_image'];

       
// !!Import Images / FILES
$img_name = $_FILES["item_image"] ["name"];
$item_temp_name = $_FILES["item_image"] ["tmp_name"];
$item_img = "../../Admin/pages/items_images/" . $img_name;


    $update = "UPDATE menu_items SET item_name = '$item_name', item_price = '$item_price', item_category = '$item_category', image = '$item_img' WHERE item_id = '$item_id'";

    $result1 = mysqli_query($conn, $update) or die ("Something Wrong!" . mysqli_error($conn));

    header("Location: http://project.loc/Admin/pages/menu_items.php");
}









?>
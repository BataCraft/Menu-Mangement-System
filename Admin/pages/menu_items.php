<?php

include "../../connection.php";

$data = "SELECT * FROM menu_items";


$result = mysqli_query($conn, $data) or die ("Query Failed");





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Items</title>

    <link rel="stylesheet" href="./menu_css/menu_items.css">
</head>
<body>
    <header>
        <?php include "./adminnav.php";?>
    <div class="header" style="display: flex; justify-content: space-between; align-items: center; padding: 0 132px; height: 50px; background-color: lightgreen; overflow: hidden;" >

<h5 style="font-size: 16px; font-weight: normal;">Add New Items</h5>
<button style="padding: 10px 20px; border-radius: 10px;"><a href="../pages/AddMenu_items.php">Add Items</a></button>
</div>
    </header>

    <section>
        <table>
            <tr>
                <td>Menu Id</td>
                <td>Items Name</td>
                <td>Price</td>
                <td>Category</td>
                <td>Items add Date</td>
                <td>Items update Date</td>
                <td></td>
            </tr>

            <?php 
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result)){
                    
             
            
            
            ?>
            <tr>
                <td><?php echo $row['item_id']?></td>
                <td><?php echo $row['item_name']?></td>
                <td><?php echo $row['item_price']?></td>
                <td><?php echo $row['item_category']?></td>
                <td><?php echo $row['created_at']?></td>
                <td><?php echo $row['updated_at']?></td>
                <td>
                   <button>
                   <a href="update_menu_items.php?id=<?php echo $row['item_id']?>">Update</a>

                   </button> 

                   <button>
                     <a href="./Delete_menu_items.php?id=<?php echo  $row['item_id']?>">Delete</a>

                   </button> 
                  

                </td>
            </tr>

            <?php
               }
            }
            
            ?>
        </table>
    </section>
</body>
</html>
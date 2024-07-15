<?php
include "../../connection.php";
$items_id = $_GET['id'];




echo $items_id;




  // !! Select Cart Data According to the Condtions.....

  $sql = "SELECT * FROM cart WHERE $items_id";

  $items_exists = mysqli_query($conn, $sql);


  // **Check if the product already exists in the cart

  if (mysqli_num_rows($items_exists) > 0) {
      $display_err = "The Product has been added Already!";
  } else {

      // !! Inserted The Items to Cart..

      $cart_insert = "INSERT INTO cart (user_id, product_name, price_per_unit, product_image, quantity) VALUES ('$user_id','$product_name', '$product_price', '$product_image', '$product_qty')";

      $cart_data = mysqli_query($conn, $cart_insert) or die("Data Not Inserted" .  mysqli_error($conn));

      if ($cart_data) {
          $display_err = "The Product has been added Sucessfully!";
          header("Location: http://project.loc/Src/Menus/");
        
      }
  }








?>
<?php
include '../../connection.php';
    

$sql = "SELECT uid, fname, uphone, uemail, address FROM user";

$data = mysqli_query($conn, $sql) or die ("Queary Failed");
    // $row = mysqli_fetch_assoc($data);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User </title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #000;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #000;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>
<body>
<div>
    <?php include '../pages/adminnav.php';?>
</div>
<div style="padding: 0 132px;">
    <?php 
    echo "<table>";
    echo "<tr>
    <th>User ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>
    <th>Remove user</th>
    </tr>";

 $num = 1;
    while ($row = mysqli_fetch_assoc($data)) {
        echo "<tr>
            <td>".$num."</td>
            <td>".$row['fname']."</td>
            <td>".$row['uphone']."</td>
            <td>".$row['uemail']."</td>
            <td>".$row['address']."</td>
            <td><a href='deleteuser.php?uid=".$row['uid']."'>Remove user</a></td>
        </tr>";
    $num++;
    }
    
    echo "</table>";

    ?>
</div>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Admin</title>
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
/* 
        a{
            background-color: red;
            padding: 10px 20px;
        } */
    </style>
</head>
<body>
    <div>
        <?php 
        include '../../connection.php';

        $sql = "SELECT a_name, a_email, a_phone, created_at FROM admin";

        $result = mysqli_query($conn, $sql) or die ('Something Went Wrong!');

        // if(mysqli_num_rows($result > 0))
        // {
        //     while($row)
        // }

        echo "<table>";
        echo "<tr>
        <th>Admin Name</th>
        <th>Admin Eamil</th>
        <th>Admin Phone Number</th>
        <th>Admin Created Date</th>
        
        </tr>";
    
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>".$row['a_name']."</td>
            <td>".$row['a_email']."</td>
    
            <td>".$row['a_phone']."</td>
    
            <td>".$row['created_at']."</td>
            

            <td><a href='delete_admin.php?id=" .   "' onclick=\"return confirm('Are you sure you want to delete this admin?')\">Remove Admin</a></td>
            </tr>";
    
        }
        
        echo "</table>";
        
        
        
        
        ?>
    </div>
</body>
</html>

<!-- $row['a_id'] -->
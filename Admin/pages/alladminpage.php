<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Admin</title>

  <style>

    table {
      padding: 0 132px;
      border-collapse: collapse;
      width: 100%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border: 1px solid #ddd;
      font-family: Arial, sans-serif;
    }

    th,
    td {
      padding: 12px;
      text-align: left;
      border: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e6e6e6;
    }

    a {
      background-color: #f44336;
      color: white;
      padding: 8px 16px;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #d32f2f;
    }
  </style>
</head>

<body>
  <div>
    <?php
    include '../../connection.php';

    $sql = "SELECT * FROM admin";

    $result = mysqli_query($conn, $sql) or die('Something Went Wrong!');
    ?>


    <div>
      <?php include '../pages/adminnav.php'; ?>
    </div>


    <table>
      <tr>
        <th>Admin id</th>
        <th>Admin Name</th>
        <th>Admin Eamil</th>
        <th>Admin Phone Number</th>
        <th>Admin Created Date</th>
        <!-- <th>Admin Created Date</th> -->

      </tr>


      <?php
       $num = 1;
      while ($row = mysqli_fetch_assoc($result)) {
      ?>

        <tr>
          <td><?php echo $num; ?></td>

          <td><?php echo $row['a_name'] ?></td>
          <td><?php echo $row['a_email'] ?></td>
          <td><?php echo $row['a_phone'] ?></td>
          <td><?php echo $row['created_at'] ?></td>
          <td>
            <a href="../pages/deleteAdmin.php?id=<?php echo $row['id']; ?>" id="remove" onclick="return confirm('Are you sure to remove admin?')">Remove Admin</a>
          </td>
        </tr>


      <?php $num++; } ?>


    </table>




  </div>


  <script>
    let removeAdmin = document.getElementById('remove');

    removeAdmin.addEventListener('click', (e) => {
      alert('Are you sure! Your want to remove Admin?')
    })
  </script>

</body>

</html>
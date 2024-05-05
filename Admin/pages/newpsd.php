<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="fields">
<form action="" method="POST">

    <input type="password" name="psd" id="psd" placeholder="Enter Your New Password">
    <input type="password" name="cpsd" id="psd" placeholder="Confirm Your New Password">

</form>
        </div>
        <button name="change_psd" type="submit">Change Password</button>
    </div>
</body>
</html>
<?php
if(isset($_POST['change_psd']))
{
    $password = $_POST['psd'];
    $cpsd = $_POST['cpsd'];
}

$sql = ""
?>

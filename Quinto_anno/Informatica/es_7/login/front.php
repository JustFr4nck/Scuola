<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <p><?php
        if (session_status() === PHP_SESSION_ACTIVE) {

            echo "Benvenuto Admin";
        } else {

            header("location:login.php");
        } ?></p>
        <a href="logout.php">logout</a>
    </div>
</body>

</html>
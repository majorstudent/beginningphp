<?php
    session_start();

    print_r($_SESSION);
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
<h5>Thank you <?php echo $name;?>, You have subscribed with the email <?php echo $email?>.</h5>
<a href="seshthree.php" target="_blank">Go To Page Three</a>
</body>
</html>

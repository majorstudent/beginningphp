<?php

if (isset($_POST['submit'])){
    session_start();// Start The Session

    $_SESSION['name'] = htmlentities($_POST['name']); //using htmlentities() Makes it more secure.
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: seshtwo.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <label>
        <input type="text" name="name" placeholder="Enter Name">
    </label>
    <br>
    <label>
        <input type="text" name="email" placeholder="Enter Email">
    </label>
    <br>
    <input type="submit" name="submit" value="Submit">
    <br>


<!--    --><?php //echo $_POST['name'] ?>
<!--    --><?php //echo $_POST['email'] ?>
</form>
</body>
</html>

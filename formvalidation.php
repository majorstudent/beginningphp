

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Form Validation</title>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$ncame = $email = $gender = $comment = $website = "";

//Code for mandatory requirements
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data): string
{
  $data = trim($data); //removes whitespace from the specified string.
  $data = stripslashes($data); //The stripslashes() function removes backslashes added by the addslashes() function.
    return htmlspecialchars($data);
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <label>
        <input type="text" name="name" value="<?php echo $name;?>">
    </label>
    <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <label>
        <input type="text" name="email" value="<?php echo $email;?>">
    </label>
    <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <label>
        <input type="text" name="website" value="<?php echo $website;?>">
    </label>
    <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <label>
        <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    </label>
    <br><br>
  Gender:
    <label>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
    </label>Female
    <label>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
    </label>Male
    <label>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
    </label>Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>

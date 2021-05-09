<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
    <div class="welcome">
        <?php echo "<h1>Welcome " . $_SESSION['username'] .  " <br>Thanks for Logging in!!</h1>"; ?>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
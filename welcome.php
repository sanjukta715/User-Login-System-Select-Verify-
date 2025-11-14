<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "You must login first!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

<a href="logout.php">Logout</a>

</body>
</html>

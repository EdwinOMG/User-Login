<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <head>
      <meta charset="UTF-8">
      <title>dashboard</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="main.css">
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>

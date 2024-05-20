<!DOCTYPE html>
<html>
<body>
 <?php
 session_start();
 require_once 'header.php';
 echo "<br>";
 if ($loggedin) {
 echo "<span style='font-family: Verdana; font-size: 5em'>$user, you are logged in</span>";
 } else {
 echo 'Up for some chit chat??<br>Signup/Login to share your epic tales!!';
 }
?>
</body>
</html>
<?php
session_start();

//check to see if user is logged in
if (!isset($_SESSION["isauthenticated"]) || $_SESSION["isauthenticated"] != true || !isset($_SESSION["user_name"])) {
  header("Location: login.php");
  die();
}

$user_name = $_SESSION["user_name"];

 ?>

<html>
    <body>
        <?php
        echo 'Welcome'.' '.$user_name.'!';
                     ?>
    </body>
</html>

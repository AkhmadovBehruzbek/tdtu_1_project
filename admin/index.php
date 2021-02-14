<?php

session_start();
if ($_SESSION["user_id"] == "") {
    header("Location:login.php");
}

    include('head.php');
    include('left.php');
    include('top.php');
    include('content.php');
    include('footer.php');
?>
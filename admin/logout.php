<?php
session_start();
session_destroy();
unset($_SESSION['aid']);
header("location:index.php");
?>
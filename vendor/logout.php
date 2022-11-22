<?php
session_start();
session_destroy();
unset($_SESSION['vid']);
header("location:index.php");
?>
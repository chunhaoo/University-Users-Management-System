<?php
session_start();

unset($_SESSION['staffID']);
unset($_SESSION['adminID']);
session_destroy();

header('location:home.php');
?>

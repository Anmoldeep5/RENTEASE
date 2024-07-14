<?php
session_start();
include "../mpdb.php";
unset($_SESSION['adminlogin']);
header('location:../login.php');
?>
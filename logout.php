<?php
session_start();
unset($_SESSION["userSession"]);
header("Location:home.php");
?>
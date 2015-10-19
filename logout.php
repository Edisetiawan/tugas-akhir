<?php
session_start();
unset($_SESSION['nis']);
session_destroy();
header('location: index.php?page=login');
?>
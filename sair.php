<?php
session_start();
unset($_SESSION['eamil']);
unset($_SESSION['eamil']);
session_destroy();
header("Location: index.php");
?>
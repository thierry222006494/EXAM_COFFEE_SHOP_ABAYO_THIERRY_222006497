<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: index.html");
    exit;
}

echo "Welcome to your dashboard!";
?>

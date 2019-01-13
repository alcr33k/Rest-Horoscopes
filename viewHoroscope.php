<?php
session_start();
if (isset($_SESSION['horoscope'])) {
    echo $_SESSION['horoscope'];
} 
?>
<?php
session_start();
if (isset($_SESSION['horoscope'])) {
    unset($_SESSION['horoscope']);
    echo 'true';
} else {
    echo 'false';
}

?>
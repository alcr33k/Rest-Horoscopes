<?php
/**
 * Går bara att begära via Delete, ska ta bort sparade horoskopet i session och echo true
 * om inget sparat echo false
 */
session_start();
if (isset($_SESSION['horoscope'])) {
    // remove hororcope
    unset($_SESSION['horoscope']);
    echo 'true';
} else {
    echo 'false';
}

?>
<?php
/**
 * kan endast begäras via get
 * kolla om horoskop finns sparat i $_SESSION
 * om ja skriv ut som output
 * annars skriv inte ut någotting
 */
session_start();
if (isset($_SESSION['horoscope'])) {
    echo $_SESSION['horoscope'];
} 

?>
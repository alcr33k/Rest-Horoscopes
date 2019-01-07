<?php 
parse_str(file_get_contents("php://input"), $_PUT);
/**
 * begärs via put
 * kolla efter födeledatum i put-datan
 * räkna ut vilket horoskop födeledatan tillhör och uppdatera det sparde horoskopet som finns i session och skriv ut true
 * om det inte finns horoskop i session updtare inte och skriv ut false
 */
require_once('generateHoroscope.php');
session_start();
if (isset($_SESSION['horoscope'])) {
    if(isset($_PUT['birthnumber'])) {
        $birthnumber = $_PUT['birthnumber'];
        $birthYear = substr($birthnumber, 0, 4);
        $birthDate= date('m-d', strtotime($birthnumber));
        setHoroscope($birthYear, $birthDate);
        echo 'true';
    } else {
        echo 'false';
    }
} else {
    echo 'false';
}
?>
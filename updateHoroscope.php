<?php 
parse_str(file_get_contents("php://input"), $_PUT);
require_once('generateHoroscope.php');
session_start();
if ((isset($_SESSION['horoscope'])) && (isset($_PUT['birthnumber']))) {
    $birthnumber = $_PUT['birthnumber'];
    $birthYear = substr($birthnumber, 0, 4);
    $birthDate= date('m-d', strtotime($birthnumber));
    setHoroscope($birthYear, $birthDate);
    echo 'true';
} else {
    echo 'false';
}
?>
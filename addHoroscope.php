<?php
require_once('generateHoroscope.php');
if (isset($_POST['birthnumber']) && (!(isset($_SESSION['horoscope'])))) {
    session_start();
    $birthnumber = $_POST['birthnumber'];
    $birthYear = substr($birthnumber, 0, 4);
    $birthDate= date('m-d', strtotime($birthnumber));
    setHoroscope($birthYear, $birthDate);
    echo 'true';
} else {
    echo 'false';
}

?>
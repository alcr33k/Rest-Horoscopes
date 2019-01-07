<?php
/**
 * Ska bara gå att begära via post
 * kolla efter födelsedatum i post och räkna ut vilket horoskop och spara det i session
 * om ett horoskop redan finns sparat ska det inte skrivas över
 * Om det inte gick att räkna ut horoskopet ska ngeting sparas
 * ska inte använda echo, ska bara skriva ut true eller false beroend på om horoskopet sparades
 */
require_once('generateHoroscope.php');
if (isset($_POST['birthnumber'])) {
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
<?php
/**
 * Ska bara gå att begära via post
 * kolla efter födelsedatum i post och räkna ut vilket horoskop och spara det i session
 * om ett horoskop redan finns sparat ska det inte skrivas över
 * Om det inte gick att räkna ut horoskopet ska ngeting sparas
 * ska inte använda echo, ska bara skriva ut true eller false beroend på om horoskopet sparades
 */
if (isset($_POST['birthnumber'])) {
    session_start();
    $birthnumber = $_POST['birthnumber'];
    $birthYear = substr($birthnumber, 0, 4);
    $formatDate = date('m-d', strtotime($birthnumber));

    if ($formatDate >= date('m-d', strtotime($birthYear . '-01-20')) && ($formatDate < date('m-d', strtotime($birthYear . '-02-18')))) {
        $_SESSION['horoscope'] = generateHoroscope('vattumannen', 2, 3, 1);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-02-19')) && ($formatDate <= date('m-d', strtotime($birthYear . '-03-20')))) {
        $_SESSION['horoscope'] = generateHoroscope('fiskarna', 3, 3, 3);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-03-21')) && ($formatDate <= date('m-d', strtotime($birthYear . '-04-19')))) {
        $_SESSION['horoscope'] = generateHoroscope('väduren', 1, 1, 1);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-04-20')) && ($formatDate <= date('m-d', strtotime($birthYear . '-05-20')))) {
        $_SESSION['horoscope'] = generateHoroscope('oxen', 2, 2, 2);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-05-21')) && ($formatDate <= date('m-d', strtotime($birthYear . '-06-20')))) {
        $_SESSION['horoscope'] = generateHoroscope('tvillingarna', 3, 2, 1);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-06-21')) && ($formatDate <= date('m-d', strtotime($birthYear . '-07-22')))) {
        $_SESSION['horoscope'] = generateHoroscope('kräftan', 1, 2, 2);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-07-23')) && ($formatDate <= date('m-d', strtotime($birthYear . '-08-22')))) {
        $_SESSION['horoscope'] = generateHoroscope('lejonet', 2, 1, 3);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-08-23')) && ($formatDate <= date('m-d', strtotime($birthYear . '-09-22')))) {
        $_SESSION['horoscope'] = generateHoroscope('jungfrun', 1, 1, 2);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-09-23')) && ($formatDate <= date('m-d', strtotime($birthYear . '-10-22')))) {
        $_SESSION['horoscope'] = generateHoroscope('vågen', 3, 3, 1);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-10-23')) && ($formatDate <= date('m-d', strtotime($birthYear . '-11-21')))) {
        $_SESSION['horoscope'] = generateHoroscope('skorpinonen', 2, 1, 3);
    } else if ($formatDate >= date('m-d', strtotime($birthYear . '-11-22')) && ($formatDate <= date('m-d', strtotime($birthYear . '-12-21')))) {
        $_SESSION['horoscope'] = generateHoroscope('skytten', 1, 2, 1);
    } else {
        $_SESSION['horoscope'] = generateHoroscope('stenbocken', 2, 2, 3);
    }
    echo 'true';
} else {
    echo 'false';
}

function generateHoroscope($starSign, $work, $relationships, $luck) {
    $horoscope = 'Efterssom du är född i sjärntecknet ' . $starSign . ' kommer du att ';

    if ($work == 1) {
        $horoscope .= 'ha en hård vecka på jobbet.';
    } else if ($work == 2) {
        $horoscope .= 'upptäcka nya möjligheter när det kommer till arbete.';
    } else if ($work == 3) {
        $horoscope .= 'ha en lätt och trevlig vecka på jobbet.';
    }

    if ($relationships == 1) {
        $horoscope .= ' Du kommer att möta någon du inte sett på länge.';
    } else if ($relationships == 2) {
        $horoscope .= ' Du har goda chancer till romantik.';
    } else if ($relationships == 3) {
        $horoscope .= ' Det kan bli festligheter under helgen.';
    }

    if ($luck == 1) {
        $horoscope .= ' Undvik spel under denna vecka.';
    } else if ($luck == 2) {
        $horoscope .= ' Saturnus månar visar att turen är på din sida på nästa Fredag.';
    } else if ($luck == 3) {
        $horoscope .= ' Du kommer att ha mycket lycka under veckan, passa på att köpa en lott!';
    }

    return $horoscope;
}

?>
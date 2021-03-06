<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horoscope</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <header>
        <h1>Mitt Horoskop <i class="fas fa-hat-wizard"></i></h1>
    </header>
    <div id="main">
        <div id="horoscopeOutput"></div>
        <input id="birthNumber" type="date" placeholder="Födelsenumber" />
        <?php if (!(isset($_SESSION['horoscope']))): ?>
            <button id="saveBtn">Spara mitt horoskop</button>
        <?php else: ?>
            <button id="updateBtn">Uppdatera mitt horoskop</button>
            <button id="deleteBtn">Radera mitt horoskop</button>
        <?php endif; ?>
    </div>
</body>
</html>
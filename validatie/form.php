<?php


$mysqli = define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DBNAME', 'gegevens');

$mysqli = new mysqli(HOST, USER, PASS, DBNAME);

if ($mysqli->connect_errno) {
    die('Error code: ' . $mysqli->connect_errno);
}

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$straat = $_POST['straat'];
$huisnummer = $_POST['huisnummer'];
$postcode = $_POST['postcode'];
$postcodeLetters = $_POST['postcode-letters'];
$woonplaats = $_POST['woonplaats'];
$email = $_POST['email'];
$telefoonnumer = $_POST['telefoonnummer'];

$voornaam = htmlentities($voornaam, ENT_QUOTES, 'utf-8');
$achternaam = htmlentities($achternaam, ENT_QUOTES, 'utf-8');
$straat = htmlentities($straat, ENT_QUOTES, 'utf-8');
$huisnummer = htmlentities($huisnummer, ENT_QUOTES, 'utf-8');
$postcode = htmlentities($postcode, ENT_QUOTES, 'utf-8');
$postcodeLetters = htmlentities($postcodeLetters, ENT_QUOTES, 'utf-8');
$woonplaats = htmlentities($woonplaats, ENT_QUOTES, 'utf-8');
$email = htmlentities($email, ENT_QUOTES, 'utf-8');
$telefoonnumer = htmlentities($telefoonnumer, ENT_QUOTES, 'utf-8');

if (!isset($_POST['submit'])) {
    echo 'Er is niet op submit gedrukt';
    exit();
}

if (empty($voornaam)
    OR empty($achternaam)
    OR empty($straat)
    OR empty($huisnummer)
    OR empty($postcode)
    OR empty($postcodeLetters)
    OR empty($woonplaats)
    OR empty($email)
    OR empty($telefoonnumer)) {

    echo 'Je bent iets vergeten in te vullen';

    exit();
}

// Voorbeeld database.
$query = "INSERT INTO gegevens VALUES (0, ?, ?, ?, ?, ?, ?, ?, ? ,?)";
$stmt = $mysqli->prepare($query);
$stmt->bindp_param('sssiissss',
    $voornaam,
    $achternaam,
    $straat,
    $huisnummer,
    $postcode.
    $postcodeLetters,
    $woonplaats,
    $email,
    $telefoonnumer);
$stmt->execute();


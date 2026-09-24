<?php
$heading = "Contact";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];

    if(empty($naam) || empty($email) || empty($bericht)) {
        echo "Vul alle velden in!";
    } else {
        echo "bedankt $naam, je bericht is ontvangen!";
    }
} else {
    require "views/contact.view.php";
}
<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = $_POST['name'];

// Tworzymy zmienną dla adresu email
$email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
$message = $_POST['text'];

// Tworzymy zmienną dla wiadomości
$theme = $_POST['subject'];

// Podajesz adres email z którego ma być wysłana wiadomość
$odkogo = $_POST['email'];

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "hello@zychmateusz.pl";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Mateusz Zych - Kontakt";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Temat: " . $theme . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";
$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";
// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);


// Przekierowywujemy na potwierdzenie
  header('Location: thanks');
exit();
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@listinglokal.de"; // deine Ziel-E-Mail
    $subject = "Neues Briefing – Listinglokal";

    $plattform = $_POST["plattform"];
    $produkt = $_POST["produkt"];
    $tonalitaet = $_POST["tonalitaet"];
    $deadline = $_POST["deadline"];
    $keywords = $_POST["keywords"];

    $message = "Neue Anfrage über das Briefing-Formular:\n\n";
    $message .= "Plattform: $plattform\n";
    $message .= "Produkt: $produkt\n";
    $message .= "Tonalität: $tonalitaet\n";
    $message .= "Deadline: $deadline\n";
    $message .= "Keywords: $keywords\n";

    $headers = "From: noreply@listinglokal.de\r\n";
    $headers .= "Reply-To: info@listinglokal.de\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: danke.html");
        exit();
    } else {
        echo "Fehler beim Senden. Bitte versuchen Sie es später erneut.";
    }
}
?>

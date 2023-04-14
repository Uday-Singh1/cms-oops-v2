<!-- weergave.php -->
<?php
// Start de sessie om toegang te krijgen tot de opgeslagen gegevens
session_start();

// Haal de Card-gegevens op uit de sessie
$card = $_SESSION['card'];

// Weergave van de Card-gegevens in een card-layout zonder div's
?>
<!DOCTYPE html>
<html>
<head>
  <title>Card Weergave</title>
  <link rel="stylesheet" href="styles.css"> <!-- Verwijzing naar extern CSS-bestand -->
</head>
<body>
  <div class="card">
    <h2><?php echo $card->title; ?></h2>
    <p><?php echo $card->content; ?></p>
  </div>
</body>
</html>

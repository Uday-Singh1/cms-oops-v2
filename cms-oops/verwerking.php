<!-- indienen.php -->
<?php
// Definieer de Card-klasse
class Card {
  public $title;
  public $content;

  public function __construct($title, $content) {
    $this->title = $title;
    $this->content = $content;
  }
}

// Haal de ingediende gegevens op uit het formulier
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $content = $_POST['content'];

  // Maak een nieuwe Card-object
  $card = new Card($title, $content);

  // Start de sessie en sla de Card-gegevens op
  session_start();
  $_SESSION['card'] = $card;

  // Doorsturen naar de weergavepagina
  header("Location: weergave.php");
  exit();
}
?>

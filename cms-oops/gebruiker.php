<?php
class Gebruiker{
    public $ID = "";
    public $userName = ""; // root
    public $password  = ""; // ""
    public $leeftijd = "";
    public $voornaam = "";
    public $achternaam = "";
    public $role = null;

    function __construct($username,$password,$leeftijd,$voornaam,$achternaam,$role) {
        $this->userName = $username;
        $this->password = $password;
        $this->leeftijd = $leeftijd;
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->role = $role;
      }


      function getRole(){
        return $this->role->role;
      }
}



?>











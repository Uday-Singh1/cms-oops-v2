<?php

include("gebruiker.php");
include ("roles.php");

$roles = [
    new Role("Admin"),
    new Role("Moderator"),
    new Role("User"),
];


$users = [
    new Gebruiker("1","voetbal","18","Uday","Singh", $roles[0]),
    new Gebruiker("2","voetbal","18","Uday","Singh", $roles[0]),
    new Gebruiker("3","voetbal","18","Uday","Singh", $roles[0]),

    new Gebruiker("4","voetbal","18","Uday","Singh", $roles[1]),
    new Gebruiker("5","voetbal","18","Uday","Singh", $roles[1]),
    new Gebruiker("6","voetbal","18","Uday","Singh", $roles[1]),

    new Gebruiker("7","voetbal","18","Uday","Singh", $roles[2]),
    new Gebruiker("8","voetbal","18","Uday","Singh", $roles[2]),
    new Gebruiker("9","voetbal","18","Uday","Singh", $roles[2]),
    new Gebruiker("10","voetbal","18","Uday","Singh",$roles[2]),
];

$currentUser = $users[2]; // een nummer geeft een user aan en wat zijn rechten zijn
if($currentUser->getRole() === "User"){

    include("menuGebruiker.php");
}

else if($currentUser->getRole() === "Admin"){
    include("menuAdmin.php");
}

else if($currentUser->getRole() === "Moderator"){
    include("menuModerator.php");
}


// [6] is een gebruiker
// [2] is een Admin
// [4] is een moderator
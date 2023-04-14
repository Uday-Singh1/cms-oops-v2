<?php 

echo "hallo ik ben een Moderator";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ModeratorMenu</title>
</head>
<body>
    <section class="container__1">
        <h1>Welkom Moderator</h1>
    </section>

   
  <form class="container" action="#" method="post">
  <h1>Post Submit Form</h1>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" placeholder="Enter title" required>
    <label for="content">Content:</label>
    <textarea id="content" name="content" placeholder="Enter content" required></textarea>
    <input type="submit" value="Submit">

   
</body>
</html>
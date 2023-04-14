<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the form was submitted
    if (isset($_POST['title']) && isset($_POST['content'])) {
        // Process the form data
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Your code to process the form data here

        // Display success message
        echo "<h2>Post submitted successfully</h2>";
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AdminMenu</title>
</head>
<body>
    <section class="container__1">
        <h1>Welkom Admin</h1>
    </section>

    <form class="container" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>Post Submit Form</h1>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter title" required>
        <label for="content">Content:</label>
        <textarea id="content" name="content" placeholder="Enter content" required></textarea>
        <input type="submit" value="Submit">
    </form>


</body>
</html>
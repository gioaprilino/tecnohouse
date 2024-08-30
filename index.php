<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnohouse by Gio</title>
</head>
<body>
    <header>
        <h1>Welcome to our website</h1>
    </header>
    <nav>
        <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <section>
        <p>This is our homepage</p>
        <?php
            $current_date = date("Y-m-d");
            echo "<p>Today's date is $current_date</p>"
        ?>
    </section>
    <footer>
        <p>&copy; 2024 Technohouse</p>
    </footer>
</body>
</html>
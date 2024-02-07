<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
    
</head>
<link rel="stylesheet" href="style.css">
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        echo "<section class='form__section'>";
        echo "<div class='container form__section-container'>";
        echo "<h2>Thank you for contacting us, $name!</h2>";
        echo "<p>We will get back to you at $email as soon as possible.</p>";
        echo "<p>Your message: $message</p>";
        echo "</div>";
        echo "</section>";
    } else {
        
    ?>
    <section class="form__section">
        <div class="container form__section-container">
            <h1>Contact Us</h1>
            <form action="contact_process.php" method="post">
                <div class="form__control">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form__control">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form__control">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>

                <div class="form__control">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <?php
    }
    ?>
</body>

</html>

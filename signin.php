<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row["password"]) { // Check plain text password
            $_SESSION['user_id'] = $row['id'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Incorrect password";
        }
    } else {
        $error = "User not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><img src="./images/avatar3.png"> Semester Encyclopedia of MCA </title>
    <!-- Custom Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <!--Iconscout cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!--Google font style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,900;1,900&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="form__section">
        <div class="container form__section-container">
            <h2>Sign In</h2>
            <?php if (isset($error)) : ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="post" action="">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn">Sign In</button>
            </form>
        </div>
    </section>
</body>
</html>

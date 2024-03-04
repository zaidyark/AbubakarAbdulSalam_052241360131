<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $type = $_POST["type"];
    $amount = $_POST["amount"];
    $name = $_POST["name"];
    $student_id = $_POST["student_id"];
    
    // Process payment
    // Here you can include your payment processing logic
    
    // Display payment confirmation
    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Payment Confirmation</title>
    <link rel='stylesheet' href='styles.css'> <!-- Link to your CSS file for styling -->
</head>
<body>

<header>
    <h1>Payment Confirmation</h1>
</header>

<nav>
    <ul>
        <li><a href='index.html'>Home</a></li>
        <!-- Add more navigation links as needed -->
    </ul>
</nav>

<main>
    <section>
        <p>Thank you, $name, for your payment of $$amount via $type. Your payment has been successfully processed.</p>
        <p>Student ID: $student_id</p>
    </section>
</main>

<footer>
    
</footer>

</body>
</html>";
}
?>

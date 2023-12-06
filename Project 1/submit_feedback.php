<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/Leica3.jpg" type="image/x-icon" />
    <script src="js/script.js" defer></script>
    <title>About Leica M3</title>
</head>
<body>


    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="promotion.html">Promotion Details</a></li>
            <li><a href="about.html">About the Product/Service</a></li>
            <li><a href="feedback.html">Rate or Add Comments</a></li>
            <li><a href="support.html">Support</a></li>
            <li><a href="corporate.html">Corporate Information</a></li>
        </ul>
    </nav>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $feedback = $_POST["feedback"];
    $rating = $_POST["rating"];

   
    if (empty($feedback)) {
        echo "Feedback is required.";
    } else {
     
        echo "<h2>Feedback Submitted</h2>";
        echo "<p>Your feedback: $feedback</p>";
        echo "<p>Your rating: $rating</p>";

    }
} else {
   
    header("Location: feedback.html");
    exit();
}
?>

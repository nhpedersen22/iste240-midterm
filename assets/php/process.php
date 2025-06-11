<?php
$visitor  = $_POST['visitor'];
$groupNum = $_POST['groupNum'];
$vdate    = $_POST['vdate'];
$place    = $_POST['fplace'];
$rating   = $_POST['rating'];

$destination_email = "RITISTprofessor@gmail.com, nhp8222@rit.edu"; 
$email_subject = "Irondequoit, NY - Pedersen, Nathan";

$email_body  = "Visitor name: $visitor\n";
$email_body .= "Group Size: $groupNum\n";
$email_body .= "Date Visited: $vdate\n";
$email_body .= "Favorite Place: $place ";

if (isset($_POST["parkside"])) {
    $email_body .= "\nI visited Parkside Diner!\n";
}
if (isset($_POST["shamrock"])) {
    $email_body .= "\nI visited Shamrock Jack's!\n";
}
if (isset($_POST["isquare"])) {
    $email_body .= "\nI visited I-Square!\n";
}

$email_body .= "\nRating -> $rating\n";

$email_body .= "\nUpdated March 2025 \n";
mail($destination_email, $email_subject, $email_body);
echo "Data Sent\n";
?>

<!DOCTYPE html>
<!-- 
    ISTE-240
    Midterm - Individual Project Part 1 (Irondequoit)
    Thank you!
    
    Author: Nathan Pedersen
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/styles.css" rel="stylesheet">
        <script src="../js/nav.js"></script>
        
        <title>Thank you! | Irondequoit</title>
        <link rel="icon" type="image/x-icon" href="../images/icons/irondequoit_town_seal.ico">
    </head>
    <body>
        <header class="vertical-header">
            <div id="town-card">
                <img src="../images/irondequoit_town_seal.png"
                    alt="Town Seal for the Town of Irondequoit, Monroe County New York."
                    id="town-seal">
                <div id="town-title">
                    <h1 class="subh1">Town of</h1>
                    <h1>Irondequoit</h1>
                </div>
                
                <!-- hamburger menu for mobile view -->
                <button id="menu-button" onclick="toggleMenuVisibility()">
                    <img src="../images/icons/icon_hamburger.png"
                        alt="Hamburger menu icon.">
                </button>
            </div>
            
            <nav id="nav-links">
                <ul>
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="../../food.html">Food</a></li>
                    <li><a href="../../helmer_nature_center.html">Helmer Nature Center</a></li>
                    <li><a href="../../durand_eastman_park.html">Durand Eastman Park</a></li>
                    <li><a href="../../seneca_park_zoo.html">Seneca Park Zoo</a></li>
                    <li><a href="../../seabreeze.html">Seabreeze Amusement Park</a></li>
                    <li id="current-page"><a href="../../feedback.html">Visitor Feedback</a></li>
                    <li><a href="../../about.html">About</a></li>
                    <li><a href="../../grading.html">Grading Criteria</a></li>
                    <li><a href="../../references.html">References</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <img src="../images/feedback/thank-you.png"
                alt="A message says 'Thank you!' in colorful letters."
                class="display-center">
            
            <div id="thank-you-msg" class="center">
                <p>Thank you so much for taking the time to complete our short survery!</p>
                <p>Your feedback helps us to Make Irondequoit Great Again!!</p>
            </div>

            <button id="homePageButton" onclick="window.location.href='../../index.html';">
                Home
            </button>
        </main>

        <footer>
            <hr id="footer-hr">
            <p>Validate this Webpage: 
                <a href="https://validator.w3.org/check?uri=https://people.rit.edu/~nhp8222/ISTE240/midterm/assets/php/process.html">HTML</a>,
                <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://people.rit.edu/~nhp8222/ISTE240/midterm/assets/php/process.html">CSS</a>
            </p>
            <p>Contact Me: <a href="mailto:nhp8222@rit.edu">nhp8222@rit.edu</a></p>
            <p>&copy; 2025 Nathan Pedersen</p>
            <p>Return to <a href="../../../index.html">Homepage</a></p>
        </footer>
    </body>
</html>

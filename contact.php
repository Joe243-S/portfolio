<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailTo = "joemande243@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name."\n\n".$message;

mail($mailTo, $subject, $txt, $headers) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Joe Mande">
        <meta name="description" content="portfolio">
        
        <link rel="shortcut icon" href="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/65/000000/external-portfolio-bitcoin-blockchain-and-cryptocurrency-smashingstocks-circular-smashing-stocks.png" type="image/x-icon" />
        <link rel="stylesheet" href="./static/css/styles.css" />

        <title>Joe Mande</title>
    </head>
    <body id="send">
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="send">
            <p class="success">Thank you for contacting me.</p>
            <p class="success">I will get back to you as soon as possible!</p>
            <p class="back">Go back to the <a class="menu" href="https://joemande.tech/#form">homepage</a>.</p>
        </div>
    </body>
</html>

';

?>
<?php

if($_POST["submit"]) {
    $recipient="pearlhsiau21@gmail.com";
    $subject="Quotes and requests";
    $senderFirstname=$_POST["firstName"];
    $senderLastname=$_POST["lastName"];
    $senderPhone=$_POST["senderNumber"];
    $senderEmail=$_POST["senderEmail"];
    $visitor=$_POST["visitCountry"];
    $visitorOther=$_POST["message"];
    $messageText=$_POST["text"];

    $mailBody=" 
    Name: $senderFirstname $senderLastname\n
    Phone: $senderPhone\n
    Email: $senderEmail\n
    Country: $visitor\n
    Other options for Country: $visitorOther\n
    Message: $messageText\n";

    mail($recipient, $subject, $mailBody, "From: $senderFirstname\n$senderLastname <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!doctype html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Benefeet</title>
        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="dist/styles.css" rel="stylesheet">
    </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar navbar-expand-lg navbar-light bg-light">
    <a href="https://holisticpronerd.com/web130/finalproject/index.html"><img src="img/logo.png"
        alt ="BENEFEET"
        width = "200"
        height = "70"
        /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://holisticpronerd.com/web130/finalproject/index.html">HOME</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false">ABOUT</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">HISTORY</a>
              <a class="dropdown-item" href="#">MISSIONS & GOALS</a>
              <a class="dropdown-item" href="#">NEWS & EVENTS</a>
            </div>
          </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false">PRODUCTS</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a class="dropdown-item" href="#">SOCK SERIES</a>
              <a class="dropdown-item" href="#">COSMETICS BOTTLES</a>
              <a class="dropdown-item" href="#">FACE MASKS</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false">CONTACT</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="#">GET QUOTES</a>
              <a class="dropdown-item" href="#">FAQ</a>
            </div>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="https://holisticpronerd.com/web130/finalproject/login.html">LOGIN</a>
        </li>
      </ul>
    </div>
  </nav>
  </header>
  <main role="main" class="contact-page2 flex-shrink-0">
    <div class="container-picture container">
      <h1 class=" contact-title-2 mt-5"> Thank You for Your Submission.</h1>
        <h3>Your submission has been received.</h3>
            <p>Please wait for 24-72 business for our response</p>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
  </body>
  </html>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Ticket price for Museum, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Ain Jeong" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-deep_purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Ticket price for Museum, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Ticket price for Museum, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/student-discount.png" alt="Student discount image" width="250" />
      </div>
      <div class="page-content-answer">
        <div id="answer">
          <?php
          // input
          $userAge = $_GET["user-age"];
          $day = $_GET["day"];
          // process
          if (($userAge >= 12 && $userAge <= 21) || $day == 'tuesday' || $day == 'thursday') {
            echo 'If you are ' . $userAge . ' years old and it is ' . $day . ' today, You are eligible for the student pricing!';
          } else {
            echo 'If you are ' . $userAge . ' years old and it is ' . $day . ' today, You must pay regular price.';
          }
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>

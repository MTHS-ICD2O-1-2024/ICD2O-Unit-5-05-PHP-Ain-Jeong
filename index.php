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
        <img src="./images/student-discount.png" alt="student discount image" width="250" />
      </div>
      <br />
      <div class="page-content-guide">Enter in your age</div>
      <div class="page-content-php">
        <form action="./answer.php" method="GET">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="user-age" />
            <label class="mdl-textfield__label" for="user-age">Your age</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <div class="page-content-guide">Please select what day it is today</div>
          <div class="mdl-textfield mdl-js-textfield">
            <select class="mdl-textfield__input" name="day">
              <option value="Monday">Monday</option>
              <option value="tuesday">Tuesday</option>
              <option value="wednesday">Wednesday</option>
              <option value="thursday">Thursday</option>
              <option value="friday">Friday</option>
              <option value="saturday">Saturday</option>
              <option value="sunday">Sunday</option>
            </select>
          </div>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Check age
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>

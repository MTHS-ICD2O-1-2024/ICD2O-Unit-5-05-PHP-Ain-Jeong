<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Types of Triangle, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Ain Jeong" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.yellow-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Types of Triangle, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Types of Triangle, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/triangles.png" alt="Triangles image" width="500" />
      </div>
      <br />
      <div class="page-content-guide">Please enter the three lengths of your triangle.</div>
      <div class="page-content">
        <form action="./answer.php" method="GET">
          <label>Side a: </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-a" />
            <label class="mdl-textfield__label" for="side-a">Enter without the unit</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <label>Side b: </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-b" />
            <label class="mdl-textfield__label" for="side-b">Enter without the unit</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <label>Side c: </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-c" />
            <label class="mdl-textfield__label" for="side-c">Enter without the unit</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
      </div>
      <br />
      <!-- Accent-colored raised button with ripple -->
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
        type="submit">
        Check
      </button>
      </form>
  </div>
  </main>
  </div>
</body>

</html>

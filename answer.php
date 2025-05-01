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
      <div class="page-content-answer">
        <div id="answer">
          <?php
          // input
          $sideA = $_GET["side-a"];
          $sideB = $_GET["side-b"];
          $sideC = $_GET["side-c"];

          // using the cosine law
          $angleA = acos(($sideB ** 2 + $sideC ** 2 - $sideA ** 2) / (2 * $sideB * $sideC)) *
            (180 / M_PI);
          $angleB = acos(($sideC ** 2 + $sideA ** 2 - $sideB ** 2) / (2 * $sideC * $sideA)) *
            (180 / M_PI);
          $angleC = acos(($sideA ** 2 + $sideB ** 2 - $sideC ** 2) / (2 * $sideA * $sideB)) *
            (180 / M_PI);

          $sumOfAngles = round($angleA, 2) + round($angleB, 2) + round($angleC, 2);

          if ($sumOfAngles == 180) {
            // process
            if ($sideA == $sideB && $sideA == $sideC && $sideB == $sideC) {
              // output
              echo 'If your sides are: ' .
                'Side a = ' . $sideA . ', ' .
                'Side b = ' . $sideB . ', and ' .
                'Side c = ' . $sideC .
                ', This is an Equilateral Triangle.';
            } else if ($sideA === $sideC || $sideA === $sideB || $sideB === $sideC) {
              // output
              echo 'If your sides are: ' .
                'Side a = ' . $sideA . ', ' .
                'Side b = ' . $sideB . ', and ' .
                'Side c = ' . $sideC .
                ', This is an Isosceles Triangle.';
            } else {
              // output
              echo 'If your sides are: ' .
                'Side a = ' . $sideA . ', ' .
                'Side b = ' . $sideB . ', and ' .
                'Side c = ' . $sideC .
                ', This is a Scalene Triangle.';
            }
          } else {
            // output
            echo 'This is not a triangle.';
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

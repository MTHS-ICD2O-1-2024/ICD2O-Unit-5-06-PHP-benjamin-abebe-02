<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Perform multiplication" />
  <meta name="keywords" content="multiplication, math, icd2o" />
  <meta name="author" content="Benjamin" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <title>Multiplication Result</title>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Multiplication Result</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content" style="padding: 20px;">
        <?php
        // Get values from the form
        $multiplicand = floatval($_GET['m1']);
        $multiplier = floatval($_GET['m2']);
        $result = 0;
        $count = 0;

        // Perform the multiplication using a while loop
        while ($count < $multiplier) {
          $result += $multiplicand;
          $count++;
        }

        // Display the result
        echo "<p>The result of $multiplicand × $multiplier is: $result</p>";
        ?>
        <br />
        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" href="./index.php">Try Again</a>
      </div>
    </main>
  </div>
</body>

</html>
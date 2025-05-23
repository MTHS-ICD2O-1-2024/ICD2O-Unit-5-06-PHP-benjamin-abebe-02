<!DOCTYPE html>
<!-- ICS2O-Unit5-06-PHP-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Doing multiplication with while loops, With JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Doing multiplication with while loops, With JS</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Doing multiplication with while loops, With JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./multiplication.png" alt="Picture of the first Hello World" />
      </div>
      <div class="page-content">Enter the number that you want to multiply! </div>
      <br />
      <form action="./answer.php" method="get">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="m1" id="multiplicand"
            required />
          <label class="mdl-textfield__label" for="demo-input">Enter the multiplicand here...</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" name="m2" id="multiplier" required />
          <label class="mdl-textfield__label" for="demo-input">Enter the multiplier here...</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        </br>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          onclick="myButtonClicked()" type="submit">
          See results!
        </button>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="answer"></div>
      </div>
  </div>
  </main>
  </div>
</body>

</html>

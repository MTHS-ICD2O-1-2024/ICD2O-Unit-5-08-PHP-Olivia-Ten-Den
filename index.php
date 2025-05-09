<!DOCTYPE html>
<!-- ICS2O-Unit 5-08-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Sum of a Number's Natural Numbers, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Sum of a Number's Natural Numbers, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Sum of a Number's Natural Numbers, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/sum.png" alt="Image of the formula for finding the sum of a number's natural numbers." />
      </div>
      <div class="page-content">Please enter an integer you want used in this equation.</div>
      <br />
      <form action="answer.php" method="GET">
        <h6>Integer :</h6>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input
            class="mdl-textfield__input"
            type="number"
            min="1"
            id="integer"
            name="integer" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="integer">Enter an integer here...
          </label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a valid integer.</span>
        </div>
        <br />
        <div>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="check-button">
            Calculate
          </button>
        </div>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="result"></div>
      </div>
    </main>
  </div>
</body>

</html>
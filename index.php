<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>AzerApi: PA System</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">


  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- Add your site or application content here -->
  <div class="login-wrapper">
    <h2>Welcome to the AzerApi: personal assistant system &copy;</h2>
    <h3>please log in before entering:</h3>
    <form action="backend/loginController.php" method="POST">
      <div class="form-group2">
        <label for="username">Username</label>
        <div class="form-input">
          <input type="text" name="username" id="username" placeholder="Gebruikersnaam">
        </div>
      </div>
      <div class="form-group2">
        <label for="password">Wachtwoord</label>
        <div class="form-input">
          <input name="password" type="password" placeholder="Wachtwoord">
        </div>
      </div>
      <div class="middle submit">
        <input name="inloggen" type="submit" value="Inloggen">
      </div>
    </form>

    <img src="img/azer_Apilogo1.png" alt="">
  </div>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>

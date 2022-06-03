<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>OispaNäyttiksiä</title>

  <link href="style/main.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="meta/apple-touch-icon.png">
  <link rel="apple-touch-startup-image" href="meta/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone 5+ -->
  <link rel="apple-touch-startup-image" href="meta/apple-touch-startup-image-640x920.png"  media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone, retina -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div class="container">
    <div class="heading">
      <h1 class="title">OispaNäyttiksiä
      </h1>
      <div class="scores-container">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
      </div>
    </div>

    <div class="above-game">
      <p class="game-intro">2048, OispaNäyttiksiä mutta tulostaululla. Päivittyy reaaliajassa.</p>
      <a class="restart-button">Uusi peli.</a>
    </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Jatka peliä!</a>
          <a class="retry-button">Yritä uudelleen!</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>

    <?php


      echo "<div class='leaders'>
      <table cellspacing='10'>
                <tr class='leaders-text'>
                    <td>Taso</td>
                    <td>Nimi</td>
                    <td>Pisteet</td>
                    <p>5 Parasta pelaajaa</p>
                </tr>
      </table>
      </div>";

      /* Connection Variable ("Servername",
      "username","password","database") */
      $con = mysqli_connect("127.0.0.1", 
              "root", "", "test");
        
      /* Mysqli query to fetch rows 
      in descending order of marks */
      $result = mysqli_query($con, "SELECT User, 
      Score FROM scoreboard ORDER BY Score DESC");
        
      /* First rank will be 1 and 
          second be 2 and so on */
      $ranking = 0;

      $con = mysqli_connect("127.0.0.1", 
      "root", "", "test");

      /* Fetch Rows from the SQL query */
      if (mysqli_num_rows($result)) {
        /* Do leaderboard users 5 times. Global variable */
        $count = 0;
          while ($row = mysqli_fetch_array($result)) {
          if ($count < 5) {
              $count=$count+1;
              $ranking++;
              echo "<div class='tdarvo'>
                <table table cellspacing='10'>
                  <td>{$ranking}</td>
                  <td>{$row['User']}</td>
                  <td>{$row['Score']}</td> 
                </table>
              </div>";
          }
        }
      }
    ?>

    <p class="game-explanation">
      <strong class="important">Miten pelata:</strong> käytä <strong>nuoli näppäimiä</strong> tai <strong>wasd</strong> liikuakseen laatoja. Kaksi saman numeroista laata <strong>yhdistyy yhdeksi isommaksi!</strong>
    </p>
    <hr>
    <p>
    <strong class="important">Note:</strong> This is not official 2048, its forked by me with leaderboard. The real is <a href="http://git.io/2048">http://git.io/2048.</a> <-- this is real site .
    </p>
    <hr>
    <p>
    Every credit goes to <a href="http://gabrielecirulli.com" target="_blank">Gabriele Cirulli.</a> Based on <a href="https://itunes.apple.com/us/app/1024!/id823499224" target="_blank">1024 by Veewo Studio</a> and <strong>FORKED</strong> by me, jeejee.
    </p>
  </div>

  <script src="js/bind_polyfill.js"></script>
  <script src="js/classlist_polyfill.js"></script>
  <script src="js/animframe_polyfill.js"></script>
  <script src="js/keyboard_input_manager.js"></script>
  <script src="js/html_actuator.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/tile.js"></script>
  <script src="js/local_storage_manager.js"></script>
  <script src="js/game_manager.js"></script>
  <script src="js/application.js"></script>
  <table class="Leaderboard">
    
</body>
</html>

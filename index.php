<!DOCTYPE html>
<html lang="en" manifest="cache.appcache"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>2048</title>

  <link href="style/main.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="http://gabrielecirulli.github.io/2048/favicon.ico">

  <meta property="og:title" content="2048 game">
  <meta property="og:site_name" content="2048 game">
  <meta property="og:description" content="Join the numbers and get to the 2048 tile! Careful: this game is extremely addictive!">
  <meta property="og:image" content="http://gabrielecirulli.github.io/2048/meta/og_image.png">
</head>
<body>
  <div class="container">
    <div class="heading">
      <h1 class="title">2048</h1>
      <div class="scores-container">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
        <div id="globalHighScore" class="best-ever-container">32323</div>
      </div>
    </div>

    <div class="above-game">
      <p class="game-intro"><em>This variation also spawns </em><strong><em>0.5</em></strong><em> 
	  and </em><strong><em>1 </em></strong><em>tiles, so watch out!</em></p>
      <a class="restart-button">New Game</a>
    </div>

    <div class="game-container">
      <div class="game-message" style="visibility:visible !important;">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Try again</a><br><br>
          <form id="globalHighScoreForm" style="display:none;" action="updateGlobalHighScore.php" method="post">
          	<input type="text" id="newHighScore" name="newHighScore" style="display:none;width:1px;">
          	<input type="submit" class="submit-button" value="Save global high score">
          	</form>
          

        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
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
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
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
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>
	
	
      <div class="tile-container"></div>
    </div>
	<!--<div style="position:fixed; left:10px; top:10px; padding: 10px;background-color:white;"><a style="color:#009900;" href="http://michaelriccardi.com/">Return to Homepage</a></div>-->
    <p class="game-explanation">
      <strong class="important">How to play:</strong> Use your <strong>arrow keys</strong> to move the tiles. When two tiles with the same number touch, they <strong>merge into one!</strong>
    </p>
    <hr style="height: -49px">
    <p>
	This is a variation, created by Michael Riccardi, of Gabriele Cirulli's game 2048, which can can be found on <a href="http://git.io/2048">this site</a>.</p>
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

  
</body></html>
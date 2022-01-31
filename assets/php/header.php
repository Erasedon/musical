<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Header</title>
</head>
<body>
    <div class="header">
        <nav class="navbar dark-mode" role="navigation">
      <div class="navbar__logo">Black Label</div>    
        <ul class="navbar__links">
          <?php
              if (isset($_SESSION)) {
          ?>
              <li class="navbar__link first" id="services"><a href="#">Deconnexion</a></li>
          <?php
              } else {
          ?>
              <li class="navbar__link second" id="services"><a href="#">Connexion</a></li>
          <?php
             }
          ?>
          <li class="navbar__link third"><a href="index.php">Accueil</a></li>
          <li class="navbar__link four"><a href="#">Playlist</a></li>
        </ul>   
    <button class="burger">
      <span class="bar"></span>  
    </button>   
  </nav>
  <main class="main-content" role="main">
    <h1>La Musique où vous le voulez!</h1>
  </main>
  </div>
</body>
</html>
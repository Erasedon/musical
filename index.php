

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="assets/css/style.css"/>
    <title>Musical</title>
</head>
<body>
    <?php 

    include "assets/php/artiste.php";

    ?>
    <h2 id='playlist' > Playlist </h2>
    <?php 

    include "assets/php/carousel.php";

    ?>

    <?php 

    include_once "assets/php/ajoutcreateur.php";

     ?>

    <script src="assets/js/script.js" async></script>
</body>
</html>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=".\asset\css\musical.css">
        <title>Connexion</title>
    </head>
    <body>
        <div class="login-form">
            <?php if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);
                switch($err)
                {
                    case 'password':
                        ?>
                        <script class="alertjs">
                            alert("Erreur: Mot de passe incorrect");
                        </script>
                    <?php
                    break;
                    
                    case 'email':
                        ?>
                        <script class="alertjs">
                            alert("Erreur: Email incorrect");
                        </script>
                    <?php
                    break;
                    
                    case 'already':
                        ?>
                        <script class="alertjs">
                            alert("Erreur: Compte inexistant");
                        </script>
                    <?php
                    break;
                }
            }
             ?>
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn_connex">Connexion</button>
                </div>
            </form>
            <p class="pattern">Pas encore <a class="bttnconnex" href="inscription.php">inscrit</a> ?</p>
        </div>
        </div>
    </body>
</html>
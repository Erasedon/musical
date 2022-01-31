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
            <?php                             
                if(isset($_GET['reg_err']))
                {
                    $err= htmlspecialchars($_GET['reg_err']);
                    switch($err)
                    {
                        case 'success':
                            ?>
                            <script class="alertjs">
                                alert("Succès: Inscription réussie !");
                            </script>
                            <?php
                            break;

                        case 'password':
                            ?>
                            <script class="alertjs">
                                alert("Erreur: Mot de passe différent");
                            </script>
                            <?php
                            break;

                        case 'email':
                            ?>
                            <script class="alertjs">
                                alert("Erreur: Email non valide");
                            </script>
                            <?php
                            break;

                        case 'email_length':
                            ?>
                            <script class="alertjs">
                                alert("Erreur: Email trop long");
                            </script>
                            <?php
                            break;

                        case 'pseudo_length':
                            ?>
                            <script class="alertjs">
                                alert("Erreur: Pseudo trop long");
                            </script>
                            <?php
                            break;

                        case 'already':
                            ?>
                            <script class="alertjs">
                                alert("Erreur: Compte déjà existant");
                            </script>
                        <?php

                    }
                }
            ?>
            <form action="inscription_traitement.php" method='post'>
            <h2 class="text-center">Inscription</h2>
            <div class="form-group">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn_connex">inscription</button>
            </div>
        </form>
        <p class="pattern"> Retour à la  <a class="bttnconnex" href="index.php">connexion</a> ?</p>
        </div>
    </body>
</html>
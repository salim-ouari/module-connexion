<?php

$bdd = mysqli_connect('localhost', 'root', "", "moduleconnexion");
mysqli_set_charset($bdd, 'utf8');
$message = '';

if (
    !empty($_POST['login']) && !empty($_POST['prenom'])
    && !empty($_POST['nom']) && !empty($_POST['password'])
    && !empty($_POST['password_confirm'])

) {
    $login = htmlspecialchars($_POST['login']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['password_confirm']);

    $requete2 = mysqli_query($bdd, "SELECT * FROM `utilisateurs` WHERE login = '$login'");
    // recupérer la requete "est ce que j'ai un login déjà existant
    $resultat = mysqli_fetch_all($requete2);


    // si elle me renvoi rien "pas de login existant"
    if (
        count($resultat) == 0

    ) {
        // alors inscrit le dans ma base de donnée
        $requete = mysqli_query($bdd, "INSERT INTO `utilisateurs`(`login`, `prenom`, `nom`, `password`) VALUES ('$login','$prenom','$nom','$password') ");
        header('Location: connexion.php');
        // sinon affiche compte déjà existant
    } else

        $message = 'compte déjà existant';

    if ($password != $confirm_password) {

        $message = 'les mots de passe ne sont pas identiques';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <header>
        <h1 id="ac"> INSCRIPTION</p>
    </header>

    <main>
        <div id="myid">
            <form class="form" action="inscription.php" method="post">
                <table>
                    <tr>

                        <td>Login</td>
                        <td><input type="text" name="login" placeholder="Ex : deggg@laplate.io" required></td>
                    </tr>
                    <tr>

                        <td>Prénom</td>
                        <td><input type="text" name="prenom" placeholder="Ex : john" required></td>
                    </tr>
                    <tr>

                        <td>Nom</td>
                        <td><input type="text" name="nom" placeholder="Ex : Smith" required></td>
                    </tr>
                    <tr>

                        <td>Mot de passe</td>
                        <td><input type="password" name="password" placeholder="Ex : *****" required></td>
                    </tr>
                    <tr>

                        <td>Confirmer mot de passe</td>
                        <td><input type="password" name="password_confirm" placeholder="Ex : *****"></td>
                    </tr>
                </table>
                <div id="but">
                    <button type="submit" name="Inscription">Inscription</button>

                    <?php
                    echo "<p>$message</p>";
                    ?>
                </div>
            </form>
        </div>
    </main>
    <!-- *************************footer*********************** -->
    <footer>

        <div id="icons">


            <a href="http://www.twitter.fr" target="_blank">
                <img src="https://img.icons8.com/color/48/000000/twitter--v1.png" /></a>


            <a href="http://www.instagram.com" target="_blank">
                <img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" /></a>

            <a href="http://www.facebook.fr" target="_blank">
                <img src="https://img.icons8.com/fluency/48/000000/facebook.png" /></a>

            <a href="https://github.com/salim-ouari/voyages.git" target="_blank">
                <img src="https://img.icons8.com/color-glass/48/000000/github.png" /></a>
        </div>

        <div class="wrapper">
            <h1 class="h1foot">My World</h1>
            <div class="copyright">Copyright © 2021. Tous droits réservés.</div>
        </div>



    </footer>
</body>

</html>
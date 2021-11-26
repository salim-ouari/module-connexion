<!-- Le formulaire doit avoir deux inputs : “login” et
“password”. Lorsque le formulaire est validé, s’il
existe un utilisateur en bdd correspondant à ces
informations, alors l’utilisateur est considéré comme
connecté et une ou plusieurs variables de session
 sont créées. -->

<?php
session_start();
$error = '';


// si le bouton "connexion" est appuyé
if (isset($_POST['connexion'])) {

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    if ($login != NULL && $password != NULL) {
        // connecte toi à la bdd
        $bdd = mysqli_connect('localhost', 'root', "", 'moduleconnexion');
        mysqli_set_charset($bdd, 'utf8');
        // requet pr rechercher si user existe
        $requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login'");
        $resultat = mysqli_fetch_assoc($requete);

        if ($password == $resultat['password']) {

            $_SESSION['user'] = $resultat;
            header('location: profil.php');
        }

        if ($password == 'admin' && $password == $resultat['password']) {

            $_SESSION['admin'] = $resultat;
            header('location: admin.php');
        }
        // on ouvre la session avec $_SESSION:

        else {

            $error = "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
        }
    } else {
        $error = 'probléme connexion';
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>

    </header>
    <main>
        <h1>CONNEXION</h1>
        <div id="myid">
            <form class="form" action="connexion.php" method="post">
                <table>
                    <tr>

                        <td>Login</td>
                        <td><input type="text" name="login" placeholder="Ex : deggg@laplate.io" required></td>
                    </tr>
                    <tr>

                        <td>Mot de passe</td>
                        <td><input type="password" name="password" placeholder="Ex : *****" required></td>
                    </tr>

                </table>
                <div id="but">
                    <button type="submit" name="connexion">Connexion</button>
                </div>
            </form>
            <p>
                <?php echo $error;   ?></p>
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
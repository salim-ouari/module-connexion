<!-- Cette page possède un formulaire permettant à
l’utilisateur de modifier ses informations. Ce
formulaire est par défaut pré-rempli avec les 
informations qui sont actuellement stockées en base
 de données. -->
<?

session_start();
include "connexion.php";

$bdd = mysqli_connect('localhost', 'root', "", "moduleconnexion");
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($connect, 'SELECT * FROM `utilisateurs` WHERE `login`= "' . $_SESSION['login'] . "'");



if (isset($_POST['edit'])) {
    var_dump([$_POST]);
    $id = $_SESSION['id'];
    $login = htmlspecialchars($_POST['login']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $password = htmlspecialchars($_POST['password']);
    // $confirm_password = htmlspecialchars($_POST['password_confirm']);

    $requete = mysqli_query($connect, 'SELECT * FROM `utilisateurs` WHERE `id`= "' . $_SESSION['id'] . "'");
    $update_new = mysqli_query($bdd, $requete);
    $resultat = mysqli_fetch_assoc($requete);
    $res = $resultat['id'];

    if ($res === $id) {

        $update = ("UPDATE `utilisateurs` SET `login`='$login',`prenom`='$name',`nom`='$surname',`password`='$password' WHERE id = '$id'");
        $requete2 = mysqli_query($bdd, $update);
    }

    if ($requete2) {

        // successful
        echo 'vous pouver modifier votre profil';
    } else {
        echo 'profil non trouvé';
    }

    // session_destroy();
    // header('Location:connexion.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <header>

        <h1>PROFIL</h1>

    </header>
    <main>
        <div id="myid">
            <form action="profil.php" method="post">
                <h2 class="mypro"> MON PROFIL</h2>
                <table>
                    <tr>

                        <td>Nouveau Login</td>
                        <td><input type="text" name="login" placeholder="Ex : deggg@laplate.io" required></td>
                    </tr>
                    <tr>

                        <td>Nouveau prénom</td>
                        <td><input type="text" name="prenom" placeholder="Ex : john" required></td>
                    </tr>
                    <tr>

                        <td>Nom</td>
                        <td><input type=" text" name="nom" placeholder="Ex : Smith" required></td>
                    </tr>
                    <tr>

                        <td>Nouveau Mot de passe</td>
                        <td><input type="password" name="password" placeholder="Ex : *****" required></td>
                    </tr>
                    <tr>

                        <td>Confirmer nouveau mot de passe</td>
                        <td><input type="password" name="password_confirm" placeholder="Ex : *****"></td>
                    </tr>
                </table>
                <div id="but">
                    <button type="submit" name="Inscription">Modifier</button>

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
            <h1 class="h1foot">Scratch Agency<span class="orange">.</h1>
            <div class="copyright">Copyright © 2021. Tous droits réservés.</div>
        </div>



    </footer>
</body>

</html>
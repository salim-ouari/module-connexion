<!-- Cette page possède un formulaire permettant à
l’utilisateur de modifier ses informations. Ce
formulaire est par défaut pré-rempli avec les 
informations qui sont actuellement stockées en base
 de données. -->
<?php
session_start();


/* Condition if qui permet de se deconnecter */
if (isset($_POST['deconnexion'])) {

    session_destroy();
    header('location: connexion.php');
}

$bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
mysqli_set_charset($bdd, 'utf8');

//si jappuie sur le bouton modif => je rentre dans la condition
if (isset($_POST['modif'])) {
    // definitions des variables 

    $id = $_SESSION['user']['id'];
    $newlogin = htmlspecialchars($_POST['login']);
    $newprenom = htmlspecialchars($_POST['prenom']);
    $newnom = htmlspecialchars($_POST['nom']);
    $newpassword = htmlspecialchars($_POST['password']);
    $newpassword_confirm = htmlspecialchars($_POST['password_confirm']);
    $error = "";

    // condition champs vide
    if (empty($_POST['login']) || empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['password']) || empty($_POST['password_confirm'])) {

        $error = "veuillez remplir ce champs";
    } else {
        // condition mdp pas identique
        if ($newpassword != $newpassword_confirm) {
            $error = "Les mots de passe ne sont pas identiques.";
        } else {
            //requêtes sql pour update utilisateur
            $requete2 = "UPDATE utilisateurs SET login = '$newlogin', prenom = '$newprenom', nom = '$newnom', password = '$newpassword' WHERE id = $id";
            $modifprofil = mysqli_query($bdd, $requete2);

            // si requete est valide
            if ($modifprofil == true) {

                // je selectionne les news valeurs 
                $query = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id = $id");
                $resultat = mysqli_fetch_assoc($query);
                // je réecris les news valeurs dans session
                $_SESSION['user'] = $resultat;

                header('location: profil.php');
            }
        }
    }
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
        <h1 id="ac">PROFIL</h1>
    </header>
    <main>
        <div id="myid">
            <form class="form" action="profil.php" method="post">
                <h2 class="mypro">MON PROFIL</h2>
                <table>
                    <tr>

                        <td>Nouveau Login<?php $_SESSION['user']['login']; ?></td>
                        <td><input type="text" name="login" value="<?php echo $_SESSION['user']['login']; ?>"></td>
                    </tr>
                    <tr>

                        <td>Nouveau prénom</td>
                        <td><input type="text" name="prenom" value="<?php echo $_SESSION['user']['prenom']; ?>"></td>
                    </tr>
                    <tr>

                        <td>Nom</td>
                        <td><input type="text" name="nom" value="<?php echo $_SESSION['user']['nom']; ?>"></td>
                    </tr>
                    <tr>

                        <td>Nouveau Mot de passe</td>
                        <td><input type="password" name="password" placeholder="Ex : *****"></td>
                    </tr>
                    <tr>

                        <td>Confirmer nouveau mot de passe</td>
                        <td><input type="password" name="password_confirm" placeholder="Ex : *****"></td>
                    </tr>
                </table>
                <div id="but">
                    <button type="submit" name="modif">modifier</button>
                </div>
            </form>

            <form class="deco" action="" method="post"><button type="submit" name="deconnexion">Déconnexion</button></form>
        </div>
        <p>
            <?php echo $error; ?>
        </p>
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
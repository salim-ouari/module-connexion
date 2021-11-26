<!-- Cette page est accessible UNIQUEMENT pour
l’utilisateur “admin”. Elle permet de lister
l’ensemble des informations des utilisateurs
présents dans la base de données. -->

<?php
session_start();

/* Condition if qui permet de se deconnecter */
if (isset($_POST['deconnexion'])) {

    session_destroy();
    header('location: connexion.php');
}

$bdd = mysqli_connect('localhost', 'root', "", "moduleconnexion");
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT * FROM `utilisateurs`");
$fetch = mysqli_fetch_all($requete, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Admin</title>
</head>

<body class="admin">


    <header>



    </header>
    <main>
        <h1>ADMIN</h1>
        <table class="tableau">
            <thead>
                <tr>
                    <td>id</td>
                    <td>prenom</td>
                    <td>nom</td>
                    <td>login</td>
                    <td>password</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fetch as $user) : ?>
                    <tr>
                        <td><?= $user["id"]; ?></td>
                        <td><?= $user["nom"]; ?></td>
                        <td><?= $user["prenom"]; ?></td>
                        <td><?= $user["login"]; ?></td>
                        <td><?= $user["password"]; ?></td>
                        <!-- <td>
                        <form class="admin" action="" method="post"><button class="btn" type="submit" name="supprimer" value="<?= $user["id"]; ?>">Supprimer</button></form>
                    </td> -->
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
        <form action="" method="post"><button type="submit" name="deconnexion">Déconnexion</button></form>
        </div>
        <p>
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

<!-- Condition if qui permet si la session est défini, d'afficher bonjour et le log de l'utilisateur && un bouton déconnexion 
 <?php if (isset($_SESSION['id'])) {
        echo 'Bonjour <i class="fas fa-user-circle"></i> ' . $_SESSION['login'] . '<br /><form method="POST" action="admin.php"><input type="submit" name="logout" value="Déconnexion" class="btn btn-danger"></form>';
    } ?>
            </section> -->

<!-- /* Affiche la page admin seulement pour l'utilisateur admin */
                                if (isset($_SESSION['id'])){
                                    if ($_SESSION['id'] == 1){
                                        echo '<li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>';
                                    }
                                } -->

<!-- /* Condition if qui permet si une session est active de faire disparaitre les pages connexion et inscription */
                                if (!isset($_SESSION['id'])){
                                    echo '<li class="nav-item"><a class="nav-link" href="connexion.php">Connexion</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link" href="inscription.php">Inscription</a></li>';
                                }
                            ?> -->
<!-- 
                            /* Affiche l'intégralité de la base de données */
                            $check_db = mysqli_query($db,"SELECT * FROM utilisateurs");

                            while($db_list = mysqli_fetch_assoc($check_db)){
                                echo '<section class="container table-style"><table><thead><th>Utilisateur ' . $db_list['id'] . ' :</th></thead>';
                                echo '<tbody><tr><td>ID : ' . $db_list['id'] . '</td></tr><tr><td>Login : ' . $db_list['login'] . '</td></tr><tr><td>Prénom : ' . $db_list['prenom'] . '</td></tr><tr><td>Nom : ' . $db_list['nom'] . '</td></tr><tr><td>Password : ' . $db_list['password'] . '</td></tr></tbody></table></section>';
                            }
                        ?> -->
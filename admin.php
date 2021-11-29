<!-- Cette page est accessible UNIQUEMENT pour
l’utilisateur “admin”. Elle permet de lister
l’ensemble des informations des utilisateurs
présents dans la base de données. -->

<?php
session_start();

/* Condition if qui permet de se deconnecter */
if (isset($_POST['deconnexion'])) {

    session_destroy();
    header('location: index.php');
}

require('connect.php');
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

        <h1 id="ac">ADMIN</h1>

    </header>
    <main>

        <div class="flex">
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
        </div>
        <form id="deco" action="" method="post"><button type="submit" name="deconnexion">Déconnexion</button></form>
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
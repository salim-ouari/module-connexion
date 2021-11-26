<!-- Le formulaire doit contenir l’ensemble des champs présents dans la
 table “utilisateurs” (sauf “id”) + une confirmation
 de mot de passe. Dès qu’un utilisateur remplit ce
formulaire, les données sont insérées dans la base de
données et l’utilisateur est redirigé vers la page de
connexion.
- Une page contenant un formulaire de connexion 
(connexion.php) : -->

<!-- Le formulaire doit avoir deux inputs : “login” et
“password”. Lorsque le formulaire est validé, s’il
existe un utilisateur en bdd correspondant à ces
informations, alors l’utilisateur est considéré comme
connecté et une (ou plusieurs) variables de session
 sont créées. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <header>

    </header>
    <main>
        <h1>ACCUEIL</h1>
        <p>Bienvenue sur mon site, pour en voir plus,
            <a href="inscription.php">Inscrivez-vous.</a>
            Sinon, <a href="connexion.php">Connectez-vous</a>
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
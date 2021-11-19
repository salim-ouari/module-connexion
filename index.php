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


<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <p>Bienvenue sur mon site, pour en voir plus,
        <a href="inscription.php">Inscrivez-vous.</a>
        Sinon, <a href="connexion.php">Connectez-vous</a>
    </p>

</body>

</html>
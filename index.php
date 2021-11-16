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

try {
   $bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion;charset=utf8', 'root', '');
}catch(Exception $e)
{
    die('Erreur'.$e->getMessage());
}

?>


 <!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Connexion</title>
</head>
<body>
    <div class="login-form">
        <form action="connexion.php" method="post">
            <h2 class="text-center">Connexion</h2>
            <div class="form-group">
                <input type="login" name="login" class="form-control" placeholder="Login" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class=btn btn-primary btn-block>Connexion</button>
            </div>
        <p class= "text-center"><a href="inscription.php">Inscription</a></p>
    </div>
        <style>
            .login-form {
            width: 340px;
            margin: 50px auto;
            }

            .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0,0,0,0.3);
            padding: 30px;
            }

            .login-form h2 {
            margin: 0 0 15px;
            }

            .form-control, .btn{
            min: height 38px;
            border-radius: 2px;
        
            }

            .btn {
            font-size: 15px;
            font-weight: bold;
            }
        </style>
</body>
</html>
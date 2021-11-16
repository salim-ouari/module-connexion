<!-- Le formulaire doit avoir deux inputs : “login” et
“password”. Lorsque le formulaire est validé, s’il
existe un utilisateur en bdd correspondant à ces
informations, alors l’utilisateur est considéré comme
connecté et une (ou plusieurs) variables de session
 sont créées. -->
<?php

 session_start();

 ?>

 <!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Connexion</title>
     <link rel="stylesheet" href="./style.css">
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
        
</body>
</html>

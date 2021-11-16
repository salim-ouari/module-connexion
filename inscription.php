<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Inscription</title>
     <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="login-form">
        <form action="inscription.php" method="post">
            <h2 class="text-center">Inscription</h2>
            <div class="form-group">
                <input type="login" name="login" class="form-control" placeholder="Login" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="prenom" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="nom" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class=btn btn-primary btn-block>Inscription</button>
            </div>
        
    </div>
        
</body>
</html>
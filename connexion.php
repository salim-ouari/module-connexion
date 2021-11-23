<!-- Le formulaire doit avoir deux inputs : “login” et
“password”. Lorsque le formulaire est validé, s’il
existe un utilisateur en bdd correspondant à ces
informations, alors l’utilisateur est considéré comme
connecté et une ou plusieurs variables de session
 sont créées. -->

<?php
session_start();

$msg = '';

// si le bouton "connexion" est appuyé
if (isset($_POST['connexion'])) {

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);


    if ($login != NULL && $password != NULL) {


        // connecte toi à la bdd
        $bdd = mysqli_connect('localhost', 'root', "", 'moduleconnexion');
        mysqli_set_charset($bdd, 'utf8');
        // requet pr rechercher si user existe
        $requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login' AND password = '$password'");
        $resultat = mysqli_fetch_all($requete, MYSQLI_ASSOC);

        if (count($resultat) == 1) {
            // on ouvre la session avec $_SESSION:
            $_SESSION['password']  = $password; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
            $_SESSION['login'] = $login;
            header('Location: profil.php');
            var_dump($_SESSION);
            $msg = "<p class= 'Vous êtes à présent connecté!>/p>";
        } else {

            echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
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
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <h1>CONNEXION</h1>
    </header>
    <main>
        <div id="myid">
            <form action="connexion.php" method="post">
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
            <?php echo $msg;   ?>
        </div>

    </main>
</body>

</html>
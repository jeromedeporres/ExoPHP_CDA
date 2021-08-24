<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session_Page2</title>
</head>
<body>
    <div>
        <?php
        //Afficher la donnée de session
        echo isset($_SESSION['prenom']) ? $_SESSION['prenom'] : ' ';
        /* echo isset($_SESSION['information']['nom']) ? $_SESSION['information']['nom'] : ' '; */

        //Modifier la donnée de session
        $_SESSION['prenom']='?';
        //Reinitialiser la session
        session_reset();
       /*  //Annuler la session
        session_abort(); */
        //Afficher la donnée de session
        echo $_SESSION['prenom'];
        ?>
    </div>
    <div><a href="./session03.php">Page3</a></div>

</body>
</html>
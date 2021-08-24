<?php

//
session_start();

//Enregistrer mes infos
$_SESSION['prenom']='Jerome';
/* $_SESSION['information']=array('prenom'=>'Jerome', 'nom'=>'DEPORRES'); */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session-Page1</title>
</head>
<body>
<?php
/* var_dump($_SESSION); */
echo $_SESSION['prenom'];
?>
<div><a href="./session02.php">Page2</a></div>
    
</body>
</html>
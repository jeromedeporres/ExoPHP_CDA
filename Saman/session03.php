<?php
session_start();

//Effacer toutes les information de session

$_SESSION=array();
if (isset($_COOKIE[session_name()])){
    setcookie(session_name(), '',time()-1);
}
//Détruit lasession
session_destroy();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page3</title>
</head>
<body>
<?php
echo session_id();
//Afficher la donnée de session.
echo 'nom = ',$_SESSION['prenom'],'<br />'; 

?>
    
</body>
</html>
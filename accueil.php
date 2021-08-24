<?php
define('CONSTANT', 'monSite.com');
$nom = ('Olivier');
$uneAutreVariable = ('nom');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        td,
        th {
            padding: 10px;
        }
    </style>

</head>

<body>

    <table>
        <tr>
            <th>Autures</th>
        </tr>

        <?php
        $autures = ["Victor Hugo", "Charles Baudelaire", "Arthur Rimbaud", "Paul Verlaine"];

        foreach ($autures as $auture) {
            echo "<tr><td>$auture</td></tr>";
        }
        ?>
    </table>
    <hr>

    <div style="text-align:center">
        <p><?php echo ('Bonjour PHP'); ?></p>
        <p><?php echo ('Bienvenue au CDA'); ?></p>
        <p><?php echo 'Nom : ' . $nom; ?></p>
        <p><?php echo CONSTANT ?> </p>
        <p><?php echo 'Le 3éme variable est :' . $$uneAutreVariable ?> </p>
    </div>
    <hr>
    <p style="text-align: center;"><strong>LesAffichages PHP</strong></p>

    <p><?php echo '1 + "1" = ', (1 + "1") ?> </p>
    <p><?php echo '1 + "1.5" = ', (1 + "1.5") ?> </p>
    <p><?php echo '1 + "1abc" = ', (1 + "1abc") ?> </p>
    <p><?php echo '1 + "1.5abc" = ', (1 + "1.5abc") ?> </p>
    <p><?php echo '1 + "1.5 abc" = ', (1 + "1.5 abc") ?> </p>
    <p><?php echo '1 + ".5" = ', (1 + ".5") ?> </p>
    <p><?php echo '1 + "-5" = ', (1 + "-5") ?> </p>
    <p><?php echo '1 + "\t\n\r 5" = ', (1 + "\t\n\r 5") ?> </p>
    <p><?php echo '1 + "abc1" = ', (1 + "abc1") ?> </p>
    <hr>
    <p style="text-align: center;"><strong>Tableau multidimensionnel et Associatif</strong></p>
    <?php


    $PERSONNES = array(
        "ANTON" => array("Prénom : " => "Jérôme", "Age : " => 20, "Ville : " => "Paris"),
        "MARTIN" => array("Prénom : " => "Kévin", "Age : " => 21, "Ville : " => "Londres"),
        "PORRES" => array("Prénom : " => "Maxime", "Age : " => 19, "Ville : " => "NewYork")
    );
    echo '<pre>';
    print_r($PERSONNES);
    echo '</pre>';




    foreach ($PERSONNES as $cle => $valeurs) { ?>
        <p> <?php print_r("<b>" . "Nom Famille : " . "</b>" . $cl); ?></p><?php
                                                                            foreach ($valeurs as $cle2 => $valeurs2) { ?>

            <p> <?php print_r("<b>" . $cle2 .  "</b>" . " " . $valeurs2); ?></p><?php
                                                                            }
                                                                        }
                                                                                ?>


<hr>

<?php

$adresseMail = ["abc@hotmail.fr", "def@hotmail.fr", "123@gmail.com", "456@yahoo.fr", "789@yahoo.fr"];

foreach($adresseMail as $mail){
$at_seperated = explode("@", $mail);
$domain [] = $at_seperated[1];
}
print_r(array_count_values($domain));

$totale = count($adresseMail);

foreach($domain as $fourn =>$nb) {
$pourcent[$fourn] =($nb / $totale)*100;
echo $fourn = round($pourcent[$fourn],2);
}

?>

<hr>

<p>Indiqez vos cinq competences principale</p>

<?php while ($i <= 4) :
     ?>
<p> <input type="text" > </p>
<?php $i++; endwhile;
?>
<input type="button" value="OK">

<hr>

<?php

do {
    $x =rand(0,100). "</br>";
    $y =rand(0,100). "</br>";
    $z =rand(0,100). "</br>";
} while (($x%2==1) or ($y%2==0) or ($z%2==0));
echo $x;
echo $y;
echo $z;

?>

<hr>

<?php

$x = 50;

if (($x%3==0 ) or ($x%5==0)) {
    echo "$x est un multiple de 3 et 5 ";
} else {
    echo "$x nest pas un multiple de 3 et 5";
}


?>
<hr>

<?php
//creation d'une function "modif" et utiliser "strtolower" (function native) pour transformer le tableau en miniscule.
/*V1*/ 
$text1 = ["jerome kevin maxime"];

function modif(&$text1) {
  echo ucfirst($text1[0]);
   
};
modif($text1);

/*V2*/ 
$text1 = array("jerome" ,"kevin" ,"maXime");

function modif1(&$text1) {?>
  <p> <?php echo ucfirst(strtolower($text1)) ?> </p> <?php ;
   
};
array_walk($text1, "modif1");
?>




</body>

</html>
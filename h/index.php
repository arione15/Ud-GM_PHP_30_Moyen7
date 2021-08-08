<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 7 : Manipuler deux classes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require 'Arme.php';
require 'Player.php';


$arme1 = new Arme("Hache", 10);
$arme2 = new Arme("Epée", 8);

$player1 = new Player();
$player1->setNom("Milo");
$player1->setIdArme($arme1->getId());

$player2 = new Player();
$player2->setNom("Tya");
$player2->setIdArme($arme2->getId());

$players = [$player1, $player2];


foreach ($players as $player) {
    echo "<br>"; 
    echo "Nom : " . $player->getNom() . "<br>"; 
    echo "Force : " . $player->getForce() . "<br>"; 
    echo "PV : " . $player->getPV() . "<br>"; 
    
    echo "----<br> ";
    echo "Arme :<br> "; 
    $arme = Arme::recupererArme($player->getIdArme());
    echo "id : " . $arme->getId() . "<br>"; 
    echo "Nom : " . $arme->getNom() . "<br>"; 
    echo "Dégat : " . $arme->getDegat() . "<br>"; 
    echo "----------------<br>";
    echo "----------------<br>";
}


?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../../global/common/template.php";
?>

<?php
/**
 * Created by PhpStorm.
 * User: Lucas Comtois
 * Date: 2018-06-08
 * Time: 14:57
 */
include ('inclus/fonct.php');
$idx = $_GET['idx'];
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd2->query("SELECT * FROM  `pub_rotative` WHERE  `idx` LIKE  '".$idx."' LIMIT 1");

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()) {
    $hit = $donnees['hit']+1;
    $add = $donnees['lien'];
    $sql = "UPDATE pub_rotative SET hit='".$hit."' WHERE idx='".$idx."'";
    $bdd->query($sql);
    header("Location:".$add); // redirection si utilisateur est ok

}
?>
<?php
/**
 * User: Lucas Comtois
 * Date: 2018-06-08
 * Time: 14:57
 */
$pub = rand(1, 11);
// On récupère tout le contenu de la table
$reponse = $bdd2->query("SELECT * FROM  `pub_rotative` WHERE  `idx` LIKE  '".$pub."' LIMIT 1");

// On affiche
while ($donnees = $reponse->fetch()) {
    $vu = $donnees['vu']+1;
    $idx = $donnees['idx'];
    $sql = "UPDATE pub_rotative SET vu='".$vu."' WHERE idx='".$pub."'";
    $bdd->query($sql);
    echo '<a href="clic.php?idx='.$donnees['idx'].'" target="_blank"><img src="'.$donnees['image'].'" alt="'.$donnees['nom'].'" title="'.$donnees['nom'].'"></a>';
}
?>
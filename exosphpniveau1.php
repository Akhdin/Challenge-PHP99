<h2>Exo1</h2>
<pre>
<?php
/* Challenge php exo1, Niveau 1
 * J-claude Grondin
 */
//créer un tableau associatif à partir de deux autres tableaux
//
//on définit les variables
$viandes = array("poulet", "boeuf", "mouton");
$cuissons = array("a point", "saignant", "bleu", "bien cuit");

//on crée un tableau vide ($plats}
$plats = [];

/* on remplit le tableau vide ($plats} en appelant les valeurs des variables 
($viandes et $cuissons}
 */
foreach( $viandes as $viande ){
foreach( $cuissons as $cuisson ) {
    
    array_push ($plats, $viande.""." "."".$cuisson."\n");
}
}
foreach( $plats as $plat ){ 
    echo $plat."\n";
}
/* le résultat est:poulet a point

poulet saignant

poulet bleu

poulet bien cuit

boeuf a point

boeuf saignant

boeuf bleu

boeuf bien cuit

mouton a point

mouton saignant

mouton bleu

mouton bien cuit*/

?>
</pre>


<h2>Exo2</h2>


<pre>
<?php
/* Challenge php exo2, Niveau 1
 * J-claude Grondin
 */

//Un algo pour transformer une chaine de caractères en tableau
//
//chaine de caractères

$genres = "horreur fantastique action western thriller comedie drame romance historique";


/* utilisation de la fonction "explode" qui retourne un tableau
 * contenant les éléments de la chaine de caractère " $genres "
 */
   $tag = explode(' ', $genres );

   print_r ($tag);
   
   /* le résultat est: 
   Array
(
    [0] => horreur
    [1] => fantastique
    [2] => action
    [3] => western
    [4] => thriller
    [5] => comedie
    [6] => drame
    [7] => romance
    [8] => historique
)*/
   
?>
</pre>


<h2>Exo3</h2>


<pre>
<?php    
/* Challenge php exo3, Niveau 1
 * J-claude Grondin
 */

//Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau
//
// on definit la variable ($fruit)
$fruits = "orange,banane,pomme,fraise,tomate,framboise,noix de coco,ananas";

/* on nomme un nouveau tableau ($fruits-favoris),
 * on brise la chaîne de caractère ($fruit)
 */
$fruits_favoris =(explode(",", $fruits));

/* On extrait une partie du tableau ($fruits) en pointant
 * -2 a partir de la fin  pour ensuite l'inserer dans 
 * le nouveau tableau ($fruits_favoris)
 */
print_r(array_slice($fruits_favoris, count($fruits_favoris) - 2));

/* le résultat est:
 * Array
(
    [0] => noix de coco
    [1] => ananas
)
 */

?>
</pre>


<h2>Exo4</h2>


<pre>
<?php
/* Challenge php exo4, Niveau 1
 * J-claude Grondin
 */


//algo pour supprimer la valeur "milieu" d'un tableau

//tableau formateur:
$prenoms = array ("Harry", "Hilary", "Harrington", "Hagrid", "Holmes");


//on cherche la key de "Harrington"
var_dump ($prenoms);

//on supprime la key "2"
unset($prenoms[2]);

//on affiche le resultat
print_r($prenoms);

/* le resultat est:
 * array (size=5)
  0 => string 'Harry' (length=5)
  1 => string 'Hilary' (length=6)
  2 => string 'Harrington' (length=10)
  3 => string 'Hagrid' (length=6)
  4 => string 'Holmes' (length=6)

Array
(
    [0] => Harry
    [1] => Hilary
    [3] => Hagrid
    [4] => Holmes
)
 */

?>
</pre>
<?php
/*
* Les boucles while
*/
 
echo "<p>1) Calculez la somme des entiers de 1 à 10 avec la boucle while<br>";
 
$somme = 0;
$i = 1;
 
while($i <= 10){
    $somme+= $i;
    $i++;
}
 
// ligne qui doit devenir fonctionnelle :
echo "La somme des entiers de 1 à 10 est : $somme";
 
echo "</p>";
 
echo "<p>2) Affichez une table de multiplication (de 1 à 10 au hasard) en utilisant la boucle while<br>";
 
// essai pour le random_int, qui permet de générer un nombre aléatoire cryptographiquement sûr
// https://www.php.net/manual/fr/function.random-int.php
// Nous pouvons utiliser la fonction mt_rand() qui est plus rapide pour générer des nombres aléatoires
try {
    $nombre = random_int(1, 10); // Génère un nombre aléatoire entre 1 et 10
    // si erreur, on attrape l'exception
} catch (\Random\RandomException $e) {
    // affiche l'erreur     
    echo $e->getMessage();
}
 
 
echo "Table de multiplication de $nombre :<br>";
 
$j = 1;
 
while($j < 10){
    $resultat = $nombre * $j;
    echo "$nombre x $j = $resultat<br>";
    $j++;
}

/*
$j = 1;
 
while($j < 10){
    echo "$resultat x $j = ".$nombre *$j;
    echo "<br>";
    $j++;
}
 */
 
echo "</p>";
 
echo "<p>3) Affichez la factorielle d'un nombre au hasard entre 3 et 12 en utilisant la boucle while<br>
La factorielle d'un nombre entier positif n, notée n!, est le produit de tous les entiers positifs inférieurs ou égaux à n.<br><br>
Par exemple : <br>3! = 3 x 2 x 1 = 6 <br> 5! = 5 x 4 x 3 x 2 x 1 = 120 <br> 
7! = 7 x 6 x 5 x 4 x 3 x 2 x 1 = 5040
<br><br>";
 
 
$nombre = mt_rand(3, 12);
$factorielle = 1;
$i = 1;
 
while ($i <= $nombre) {
    $factorielle *= $i;
    $i++;
}

/* $nombre = mt_rand(3, 12);
$factorielle = 1;
$i = $nombre;
 
while ($i <= 1) {
    $factorielle *= $i;
    $i--;
}
 
*/
 
 
// ligne qui doit devenir fonctionnelle :
echo "<br>La factorielle de $nombre est : $factorielle";
 
echo "</p>";
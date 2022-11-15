<h1>Opérateur = </h1>
<?php
// Demonstrates the operators: =
// = <- permet d'affecter les valeurs aux variables
//Affectation de toutes les valeurs qui vont nous servir dans le programme
$var1 = 2;
$var1bis = 2;
$var2 = 2;
$var3 = (int) 2.0;
$var4 = 8;
$var5 = NULL;
$resultatVar5= $var5 ?? 'NULL';
$resultatVar2= $var2 ?? '2';

echo "Résultat des affectations: ";
echo "<br>";
echo "var1: ",$var1,"<br>","var1bis: ",$var1bis,"<br>","var2: ",$var2,"<br>","var3: ",$var3,"<br>","var4: ",$var4,"<br>","var5: NULL","<br>","resultatVar5: ",$resultatVar5,"<br>","resultatVar2: ",$resultatVar2;
?>

<h1>Opérateur == </h1>
<?php
//Demonstrates the operators: ==
if($var1==$var2){
    echo "La variable var1 est : $var1 ","<br>";
    echo "La variable var2 est : $var2","<br>";
    echo "La variable var1 est bien égale à la variable var2";
}
?>

<h1>Opérateur === </h1>
<?php
//Demonstrates the operators: ===
//Le triple égale permet de déterminer si deux variables sont bien égales
//Cela comprend par exemple que 2 et 2.0 sont égaux malgré la différence de type
echo "Test si var1 est bien égale à var3 on ne vérifie pas le type","<br>";
if($var1===$var3){
    echo "$var1 === $var3 est vrai car $var1= 2 et $var3 = 2.0","<br>";
}
?>

<h1>Opérateur ++ </h1>
<?php
//Demonstrates the operators: ++
//Permet d'incrémenter la variable
echo "var1 = $var1";
$var1 ++;
echo "<br>";
echo "var1 après changement = $var1", "<br>";
?>

<h1>Opérateur -- </h1>
<?php
//Demonstrates the operators: --
//Permet de désincrémenter la variable
echo "var1 = $var1";
$var1 --;
echo "<br>";
echo "var1 après changement = $var1","<br>";
?>

<h1>Opérateur <= </h1>
<?php
//Demonstrates the operators: <=
// <= contrôle si la valeur a est plus petite ou égale à la valeur b
echo "Test si var1 est inférieur ou égale à var4: ","<br>";
if($var1<=$var4){
    echo "true <=";
}
?>

<h1>Opérateur <=> </h1>
<?php
//Demonstrates the operators: <=>
// <=> contrôle si la variable a est égale à la variable b
echo ($var1<=>$var4), " retourne -1 car nous testons si var1 est égale à var4 or ils sont différents","<br>";


echo ($var1<=>$var1bis), "retourne 0 car nous testons si var1 est égale à var1bis","<br>";

?>

<h1>Opérateur >= </h1>
<?php
//Demonstrates the operators: >=
// <= contrôle si la valeur a est plus grande ou égale à la valeur b
echo "Test si var4 est supérieur ou égale à var1: ","<br>";
if($var4>=$var1){
    echo 'true >=';
    echo "<br>";
}?>

<h1>Opérateur || </h1>
<?php
//Demonstrates the operators: ||
// || Peut être remplacé par le mot "ou"
echo "Test si var1 est égale à 2 ou si var4 est égale à 9","<br>";
if($var1==2 || $var4==9){
    echo 'true ||';
    echo "<br>";
}?>


<h1>Opérateur && </h1>
<?php
//Demonstrates the operators: &&
// Pour que la condition soit valide il faut que les deux conditions soient valides
echo "Test si var1 est égale à 2 et si var4 est égale à 8","<br>";
if($var1==2 && $var4==8){
    echo "true &&";
    echo "<br>";
}?>

<h1>Opérateur & </h1>
<?php
//garde les bits communs en binaire : 12 = 1100 et 8 = 1000 => retourne 8 ou 1000 (4e bit en commun)
echo 12 & 8;
echo "<br>";?>

<h1>Opérateur | </h1>
<?php
//garde tous les bits égaux à 1 en binaire : 12 = 1100 et 8 = 1000 => retourne 14 ou 1110 (4e,3e et 2e bit égaux à 1)
echo 12 | 2;
echo '<br>';
?>

<h1>Opérateur ?? </h1>
<?php
//Demonstrates the operators: ??
// Si l’expression à gauche de l’opérateur vaut NULL,
// alors l’expression à droite de l’opérateur sera renvoyée.
// Dans tous les autres cas, c’est l’expression à gauche de l’opérateur qui sera renvoyée.
echo "$var2 contient " .$resultatVar2;
echo "<br>";
echo "$var5 contient" .$resultatVar5;
echo "<br>";
?>
<h1>Opérateur ? </h1>
<?php
//Demonstrates the operators: ?
// Si la condition avant le "?" est vérifié on renvoie la valeur avant les : sinon on renvoie l'autre réponse
echo "Opétateur ?: : ";
$a = 0;
$b = 7;
echo "a=0, b=7 | a = (a==b) ? 1 : 0) : a = ", $a = ($a == $b) ? 1 : 0;
$c = 5;
echo " | c = 5 | a = (c==5) ? 1 : 0) : a = ", $a = ($c == 5) ? 1 : 0;
echo "<br>";
?>

<a href="..\index.php">Menu principal</a>

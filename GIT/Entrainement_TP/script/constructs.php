<h1>Constructeur foreach </h1>
<?php
//Demonstrates constructs foreach :
//foreach est utilisable que pour le tableau il nous permet de le parcourir
//Ici on affiche le carré des quatre premiers entier qu'il existe
$arr = array(1, 2, 3, 4);

foreach($arr as &$value){
    $nb_actuel = $value;
    $value = $value * $value;

    echo"Le carré de ", $nb_actuel, " vaut ", $value;
    echo"<br>";
}
?>


<h1> Constructeur for</h1>
<?php
//Demonstrates constructs for :
//Affichage des dix premiers entiers
echo "Affichage des dix premiers entiers avec une boucle for: ";
echo"<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i, " ";
}
echo"<br>";
?>

<h1> Constructeur if else if</h1>
<?php
//Demonstrates the operators: if else if

$var1 = 2;
$var2 = 2;
$var3 = 3;
$var4 = 18;
if($var1==$var2){
    echo 'La variable var1 est :',$var1;
    echo "<br>";
    echo 'La variable var2 est :',$var2;
    echo "<br>";
    echo 'La variable var1 est bien égale a la variable var2';
    echo "<br>";}
    elseif ($var4 != $var3){
    echo 'La variable var4 est :',$var4;
    echo "<br>";
    echo 'La variable var3 est :',$var3;
    echo "<br>";
    echo 'La variable var4 est bien différente de la variable var3';
    echo "<br>";
}
?>
<h1> Constructeur while</h1>
<?php
// Demonstrates the operators: while
echo "Affichage des dix premiers entiers avec une boucle while: ";
echo"<br>";
$i = 1;
while ($i <= 10) {
    echo $i++, " ";
}
echo"<br>";
?>

<h1> Constructeur do-while</h1>
<?php
//Demonstrates the operator :  do-while
//tant que i est inférieur à 10 on l'affiche après on arrête.
$i = 1;
do {
    echo $i, " ";
    $i++;
} while ($i < 10);
echo"<br>";
?>

<h1> Constructeur a?b :c</h1>
<?php
//Demonstrates the operator : a?b:c
//Suivant si la condition a est vérifiée nous renvoyons le résultat b sinon on renvoie c
$a = 5;
$b = 7;
echo "La variable a est égale à: ", $a;
echo"<br>";
echo "La variable b est égale à: ", $b;
echo"<br>";
echo ($a==$b)? "La variable a est égale à la variable b" : "La variable a n'est pas égal à la variable b";

?>

<a href="..\index.php">Menu principal</a>

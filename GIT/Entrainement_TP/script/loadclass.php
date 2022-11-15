<h2>Class constant </h2>
<?php
    include 'classConstantAndVariableCall.php';
    define('BONJOUR', new classConstantAndVariableCall("BONJOUR"));

    $nom =BONJOUR->getName();
    echo $nom ;
?>

<h2>Class Variable </h2>
<?php
    $variable = new classConstantAndVariableCall("Bonsoir");
    echo $variable -> getName();

?>

<h2>Class inheritance and interface </h2>

<?php
    include 'inheritance.php';


    $user1 = new Utilisateur("Hector","LmEn");
    $user1->getName();
    echo "<br>";
    $admin1 = new Admin("Samuel","edxsdcs");
    $admin1->bannir($user1);
    echo "<br>";

?>

<h2>Class method that sorts a table as above with full signature </h2>
<?php

    include 'classMethod.php';
    $variable =new classMethod();
    $variable->sortTable();

?>
<h2>class method that returns the last character of a string</h2>
<?php
    $string = "Bonjour le monde";
    echo "La phrase est: ", $string;
    echo "<br>";
    $variable =new classMethod();
    echo $variable->returnLastCARACTER($string);
    echo "<br>";
?>
<h2>class method that connects to your DB, creates a table, inserts some data into it, and then reads and returns it</h2>
<?php
    $variable->dataBase();
?>
<h2>class method that creates a JPEG image representing a red circle and the word "I LOVE PHP AND 3.01 PW" over a blue background and saves it on disk</h2>
<?php
    $variable = new classMethod();
    $variable->jpegImageCreation();
?>
<h2>class method that writes the contents of www.google.com into a file</h2>
<?php
    $variable = new classMethod();
    $variable->readcontent();
?>
<h2>class method that merges two arrays from parameters</h2>
<?php

    $randomArray1 = array('Première valeur', 'Seconde valeur', 'Troisième valeur');
    print_r($randomArray1);

    echo "<br>";
    echo "Second tableau";
    $randomArray2 = array();
    for ($i = 0; $i < 10; $i++) {
        $randomArray2[] = rand(0, 10);
        echo " ",$randomArray2[$i];
    }
    asort($randomArray2);

    echo "<br>";
    echo "Mélange des deux tableaux";
    $variable = new classMethod();
    $variable->mergeArray($randomArray1,$randomArray2);



    ?>

<h2>class method that returns an array containing the current file name, class name and method name</h2>
<?php
    $getinformation = new classMethod();
    $getinformation->informationsFile();
?>
<h2>class method that returns the type of an unknown parameter</h2>

<?php
    $parameter = 20.05;
    echo "Le parametre entré est: ", $parameter;
    echo "<br>";
    $variable1 = new classMethod();
    $variable1->getType($parameter);
?>
<h2>class method that returns an array containing the name of the current host, server and client IP, and request method</h2>
<?php
    $getinformation = new classMethod();
    $getinformation->informations();
?>
<h2>class method that returns the currently passed HTTP GET value named test</h2>
<?php
    echo '<a href="?test=OK">Test $_GET</a> <br>';
    $variable->httpGetTest();
?>
<h2>class method that returns the currently consumed RAM and the maximum RAM your script can use</h2>
<?php
    $ram = new classMethod();
    $location = 'loadclass.php';
    $ram->echo_memory_usage();
?>



<a href="..\index.php">Menu principal</a>
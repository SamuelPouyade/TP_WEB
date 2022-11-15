<?php
//
$randomArray = array();
for ($i = 0; $i < 1000; $i++) {
    array_push($randomArray, rand(0, 1000));
}
asort($randomArray); ?>

<table>
    <thead>
    <tr>
        <th colspan="10">
            Les valeurs du tableau
        </th>
    </tr>
    </thead>
    <tbody>

    <?php

    // On compte combien de lignes du tableau on a parcouru
    $compteurTableau = 0;
    // On compte une seule fois combien il y a d'éléments dans le tableau pour pas rappeler la fonction à chaque fois
    $totalTableau = count($randomArray);

    // On vérifie d'abord que le tableau n'est pas vide
    if (!empty($randomArray)) {

        // On insère la première ligne vu que le tableau n'est pas vide
        echo '<tr>';

        // Parcourir le tableau case par case
        foreach ($randomArray as $key => $value) {

            $compteurTableau++;

            echo '<td  style = "border: 5px solid #1c87c9;">' . $key . '=>' . $value . '</td>';

            // Si on est à la toute première itération ou on a parcouru 10 cases de plus
            // (compteur modulo 10 = 0)
            if ($compteurTableau % 10 === 0) {
                // Alors on ferme la ligne actuelle...
                echo '</tr>';

                // ...et tant que le tableau n'est pas fini...
                if ($compteurTableau < $totalTableau) {
                    // ...on insère une nouvelle ligne de tableau HTML
                    echo '<tr>';
                }
            } elseif ($compteurTableau === $totalTableau) {
                echo '</tr>';
            }
        }
    }
    ?>

    </tbody>
</table>

<a href="..\index.php">Menu principal</a>
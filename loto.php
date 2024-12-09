<?php
function loto() {
    // Avec rand
    $tab = [];
    $num_chance = rand(1, 5);
    for ($i = 0; $i < 5; $i++) {
        $tab[$i] = rand(1, 45);
    }
    sort($tab);
    for ($i = 0; $i < 5; $i++) {
        echo $tab[$i] . " ";
    }
    echo "Numéro chance: $num_chance | \n";
}
loto();
$compte = 0;
$similaire;
function loto_alt($size, $max, $min=1) {
    // Sans rand
    global $compte;
    global $similaire;
    $tab = range($min, $max);
    $tab_predef = [5, 3 ,10 , 25, 45];
    shuffle($tab);
    $tab2 = (array_slice($tab, 0, $size));
    sort($tab2);
    for ($i = 0; $i < count($tab2); $i++) {
        echo $tab2[$i] . " ";
        for ($j = 0; $j < count($tab2); $j++) {
            if ($tab2[$i] == $tab_predef[$j]) {
                $compte++;
                $similaire = $similaire . $tab2[$i] . " ";
            }
        }
    }
    echo " | $compte nombres similaires !";
    echo " $similaire";
}
loto_alt(5, 49);
?>
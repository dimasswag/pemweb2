<?php

function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function check_number_category($num) {
    $category = "";
    if ($num % 2 == 0) {
        $category .= "Bilangan Genap, ";
    } else {
        $category .= "BilanganGanjil, ";
    }
    if (is_prime($num)) {
        $category .= "Sekaligus bilangan prima";
    } 
    return $category;
}

for ($i = 1; $i <= 100; $i++) {
    echo "<li>Angka " . $i . " adalah " . check_number_category($i) . "\n</li>";
}

?>
<?php 

// Menghitung total 2 kubus
// $a = 9;
// $b = 4;


// $luas_a = $a * $a * $a;
// $luas_b = $b * $b * $b;

// $total = $luas_a + $luas_b;

// echo "Total luas dari kuburs A dan dengan sisi $a dan kubus B dengan sisi $b adalah $total"
// echo "<hr>";

// Membuat fungsi / definisi fungsi
function total_luas_dua_kubus($a,$b) {
    $luas_a = $a * $a * $a;
    $luas_b = $b * $b * $b;

    $total = $luas_a + $luas_b;
    
    return "Total luas dari kuburs A dan dengan sisi $a dan kubus B dengan sisi $b adalah $total";

}

    echo total_luas_dua_kubus(9, 4);
    echo "<br>";
    echo total_luas_dua_kubus(10, 15);
    echo "<br>";
    echo total_luas_dua_kubus(100, 200);


?>
<?php 
    // ARRAY 
    // Array adalah variable yang dapat menampung lebih dari satu nilai sekaligus
    
    // 

    // Membuat Array
    $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"]; // Cara baru
    $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni"); // Cara Lama
    $myArray = [100, "Sandhika", true];

    // Mencetak Array
    // mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0

    echo $hari[1];
    echo "<br>";
    echo $bulan [2];
    echo "<hr>";

    // Mencetak semua elemen pada array
    // var_dump() atau print_r()
    // khusus untuk debugging
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<hr>";

    // Mencetak menggunakan looping
    // for 
    for( $i = 0; $i < count($hari); $i++ ) {
        echo $hari[$i];
        echo "<br>";
    }
    echo "<hr>";

    // foreach (khusus untuk array)
    foreach($bulan as $b) {
        echo $b;
        echo "<br>";
    }
    echo "<hr>";

    foreach ($hari as $key => $value){
        echo "Key; $key, Value: $value";
        echo "<br>";
    } 
    echo "<hr>";
    
    // Memanipulasi isi array
    // Menambah elemen baru di akhir array
    $hari[] = "Sabtu";
    $hari[count($hari)] = "Minggu";
    var_dump($hari);
    echo "<r>";
















?>
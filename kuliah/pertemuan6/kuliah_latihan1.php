<?php 
    // array ASsociative
    // array yang indexnya berupa string yang ber-asosiasi dengan nilainya


    $mahasiswa = [
        [
            "nama" => "Mohamad Afandi Hidayat", 
            "npm" => "213040022", 
            "email" => "Afandi@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "nama" => "Wildan Fauzan", 
            "npm" => "213040018", 
            "email" => "Wildan@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "nama" =>"Ainan Bahrul", 
            "npm" => "213040026", 
            "email" => "Ainan@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "nama" =>"Haykal", 
            "npm" =>"213040015", 
            "email" => "Haykal@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"]
    ];

   // var_dump($mahasiswa[2]["email"]);    
?>

   <?php  foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama    :   <?php echo $mhs["nama"]; ?> </li>
        <li>NPM     :   <?php echo $mhs["npm"]; ?> </li>
        <li>Email   :   <?php echo $mhs["email"]; ?>:</li>
        <li>Jurusan :   <?php echo $mhs["jurusan"]; ?></li>
    </ul>
<?php } ?>





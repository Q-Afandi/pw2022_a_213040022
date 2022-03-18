<?php 
    // Studi Kasus

    $mahasiswa = [
        ["Mohamad Afandi Hidayat", "213040022", "Afandi@unpas.ac.id", "Teknik Informatika"],
        ["Wildan Fauzan", "213040018", "Wildan@unpas.ac.id", "Teknik Informatika"],
        ["Ainan Bahrul", "213040026", "Ainan@unpas.ac.id", "Teknik Informatika"],
        ["Haykal", "213040015", "Haykal@unpas.ac.id", "Teknik Informatika"]
    ];

    var_dump($mahasiswa);    

?>

<?php  foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama    :   <?php echo $mhs[0]; ?> </li>
        <li>NPM     :   <?php echo $mhs[1]; ?> </li>
        <li>Email   :   <?php echo $mhs[2]; ?>:</li>
        <li>Jurusan :   <?php echo $mhs[3]; ?></li>
    </ul>
<?php } ?>
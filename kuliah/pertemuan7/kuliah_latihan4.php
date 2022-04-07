<?php $mahasiswa = [
        [
            "gambar" => "img/bloodhunt.png",
            "nama" => "Mohamad Afandi Hidayat", 
            "npm" => "213040022", 
            "email" => "Afandi@unpas.ac.id", 
            "jurusan" => "Sonar Reacon"],
        [
            "gambar" => "img/caustic.png",
            "nama" => "Wildan Fauzan", 
            "npm" => "213040018", 
            "email" => "Wildan@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "gambar" => "img/crypto.png",
            "nama" =>"Ainan Bahrul", 
            "npm" => "213040026", 
            "email" => "Ainan@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "gambar" => "img/lifeline.png",
            "nama" =>"Haykal", 
            "npm" => "213040011", 
            "email" => "Haykal@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "gambar" => "img/loba.png",
            "nama" =>"Gilang", 
            "npm" => "213040023", 
            "email" => "Gilang@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "gambar" => "img/octane.png",
            "nama" => "Diva Nurhafiffah", 
            "npm" => "213040001", 
            "email" => "Diva@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "gambar" => "img/pathfinder.png",
            "nama" =>"Revina Bella Trisna", 
            "npm" => "213040002", 
            "email" => "Revina@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "gambar" => "img/revenant.png",
            "nama" => "Alif AKbar", 
            "npm" => "213040010", 
            "email" => "Alif@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "gambar" => "img/wattson.png",
            "nama" => "Fowaz Alvarez", 
            "npm" => "213040015", 
            "email" => "Fowaz@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"],
        [
            "gambar" => "img/wraith.png",
            "nama" => "Daffa", 
            "npm" => "213040018", 
            "email" => "Daffa@unpas.ac.id", 
            "jurusan" => "Teknik Informatika"]
    ];
    ?>
    
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
  <div class="container">
      <h1>Detail Mahasiswa</h1>
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
        <p class="card-text"><?= $_GET["npm"]; ?></p>
        <p class="card-text"><?= $_GET["email"]; ?></p>
        <p class="card-text">Teknik Informatika</p>
        <a href="kuliah_latihan3.php?">kembali</a>
      </div>
    </div>
  </div>
</div>
      

    </div>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php 

    require "functions.php";
    // ketika tombol tambah di klik 
    
    if(isset($_POST["tambah"]))  {
        // jalankan fungsi tambah()
        tambah($_POST);

    // jalankan fungsi tambah ()
        if(tambah($_POST) > 0) {
            echo "<script>
                    alert ('data berhasil ditambahkan');
                    document.location.href = 'latihan1.php'; 
                    </script>";
        }
    }    
?>
    
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
  </head>
  <body>
    
  <div class="container">
      <h1>Daftar Mahasiswa</h1>

        <a href="index.php">Kembali ke daftar mahasiswa </a>

        <div class="row nb-3">
            <div class="col-8">
                <form action="" method="post" autocomplete="off">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control" id="npm" name="npm" required maxlength="9" 
                    minlength="9" style="width: 250px;">
                    

                    <div class="row nb-3">
                    <label for="npm" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="row nb-3">
                    <label for="npm" class="form-label">email</label>
                    <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <div class="row nb-3">
                    <label for="npm" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>

                    <div class="row nb-3">
                    <label for="npm" class="form-label">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar">
                    </div>

                    <button type="submit" class="btn btn-primary" name="tambah">Tambah Data Mahasiswa</button>

                </form>
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
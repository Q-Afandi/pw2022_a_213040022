<?php
    // session
    session_start();

    if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    }
    //akhir session

    require "functions.php";
    // ketika tombol tambah di klik 
    
    if(isset($_POST["tambah"]))  {

    // jalankan fungsi tambah ()
        if(tambah($_POST) > 0) {
            echo "<script>
                    alert ('data berhasil ditambahkan');
                    document.location.href = 'product.php'; 
                    </script>";
        } else {
          echo "<script>
          alert ('data gagal ditambah');
          document.location.href = 'product.php'; 
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

    <title>Create New Product</title>
  </head>
  <body>
    <!-- Pembuka Navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top m-0 p-2">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img
            src="img/pp.jpg"
            width="30"
            height="24"
            class="d-inline-block align-text-top"
          />
          XinawangSpeed
        </a>
        <a class="nav-link text-white" href="logout.php">Logout</a>
      </div>
    </nav>
  <!-- Penutup Side Bar -->
    <!-- Pmebuka Side Bar -->
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark m-2 p-4">
        <ul class="nav flex-column m-2">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#"
              >Dashboard</a
            >
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="admin.php">Admin</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="product.php">Product</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="blogs.php">Blogs</a>
            <hr class="bg-secondary" />
          </li>
        </ul>
      </div>
    <!-- Penutup Sidebar -->
    <!-- Pembuka Input Data Baru -->
  <div class="container col-md-9 m-0">
      <h1>Product</h1>

        <a href="product.php" class="btn btn-outline-primary btn-sm"> back to table </a>

        <div class="row nb-3">
            <div class="col-8">
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row nb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <!-- ini buat yang option -->
                    <!-- <div class="row nb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>Select Category</option>
                      <option value="T-Shirt">T-Shirt</option>
                      <option value="Hoodie">Hoodie</option>
                      <option value="Sticker">Sticker</option>
                    </select>
                    </div> -->

                    <!-- ini kalo buat yang text -->
                    <div class="row nb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category">
                    </div>

                    <div class="row nb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Rp. 000.000">
                    </div>

                    <div class="row nb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok" required maxlength="9" 
                    minlength="0" style="width: 150px;" placeholder="000000000">
                    </div>

                    <div class="row nb-3">
                    <label for="npm" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-2" name="tambah">Add New Product</button>

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
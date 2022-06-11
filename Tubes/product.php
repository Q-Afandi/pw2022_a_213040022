<?php 
      // session
    session_start();

    if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    }
    //akhir session

      require "functions.php";
      $product = query("SELECT * FROM product");

      // tombol search
      if( isset ($_POST["search"]) ) {
          $product = search($_POST["keyword"]);
      }
      
    ?>
    
<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- CSS -->
      <link href="css/style.css" />

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>PRODUCT | XinawangSpeed</title>
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
      <div class="col-md-2 bg-dark m-2 p-4 pt-5">
        <ul class="nav flex-column m-2">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php"
              >Dashboard</a
            >
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Admin</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="product.php">Product</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Blogs</a>
            <hr class="bg-secondary" />
          </li>
        </ul>
      </div>
    <!-- Penutup Sidebar -->
    <!-- Pembuka Container dari  -->
      <div class="container col-md-9 mt-3 mx-2">
      <h1>DATA PRODUCT</h1>
      <!-- form -->
      <div class="row mb-4">
        <div class="col-12">
      <form action="" method="post" class="col-md-9">
      <div class="input-group mt-3">  
      <a href="tambah.php" class="btn btn-primary mx-3">Input New Product</a>
          <input type="text" class="form-control" name="keyword" placeholder="Search here..." 
          size="50" autocomplete="off" class="mx-3 row-4 col-6" autofocus 
          id="keyword">
          <button type="submit" name="search" id="tombol-cari" class="btn btn-primary m-0">Search</button>
          <a href="cetak.php" class="btn btn-danger ms-1" target="_blank"><i class="bi bi-file-earmark-pdf-fill"></i>&nbsp;Export ke PDF</a>
        </form>
              </div>
            </div>
        </div>
      <!-- end form -->
<div id="container">
      <table class="table table-hover mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php  $no = 1; foreach($product as $prod) { ?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
          <img src="img/<?php echo $prod["gambar"]; ?>" width="100" >
      </td>
      <td><?php echo $prod["name"]; ?></td>
      <td><?php echo $prod["category"]; ?></td>
      <td><?php echo $prod["price"]; ?></td>
      <td><?php echo $prod["stok"]; ?></td>
      <td>
          <a href="" class="btn badge bg-success">view</a>  
          <a href="edit.php?id=<?= $prod["id"];?>" class="btn badge bg-warning">edit</a>
          <a href="delete.php?id=<?= $prod["id"];?>" class="btn badge bg-danger"
          onclick="return confirm('apakah anda yakin?');">delete</a>
      </td>
    </tr>
    
      <?php } ?>
    </tbody>
  </table>
    </div>
    </div>
</div>
<!-- Penutup Container -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script> -->
    <script src="js/script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

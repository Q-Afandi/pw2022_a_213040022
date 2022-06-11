<?php 
      // session
    session_start();

    if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    }
    //akhir session

      require "aFunctions.php";
      $admin = query("SELECT * FROM admin");

      
    ?>
    
<!DOCTYPE html>
<html lang="en">
  <head>
    

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

    <title>ADMIN | XinawangSpeed</title>
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
            <a class="nav-link text-white" href="admin.php">Admin</a>
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
      <h1>DATA ADMIN</h1>

      <div class="row mb-4">
        <div class="col-12">
      <form action="" method="post" class="col-md-9">
      <div class="input-group mt-3">  
      <a href="registrasi.php" class="btn btn-primary mx-3">Add New Admin</a>
        </form>
        </div>
        </div>
        </div>

      <table class="table table-dark table-striped table-hover mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php  $no = 1; foreach($admin as $adm) { ?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td><?php echo $adm["username"]; ?></td>
      <td><?php echo $adm["password"]; ?></td>
      <td>
          <a href="aDelete.php?id=<?= $adm["id"];?>" class="btn badge bg-danger"
          onclick="return confirm('apakah anda yakin?');">delete</a>
      </td>
    </tr>
    
    
      <?php } ?>
    </tbody>
  </table>
    </div>
    </div>
<!-- Penutup Container -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

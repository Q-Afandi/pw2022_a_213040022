<?php 
    require 'functions.php' ;
    $connection = mysqli_connect('localhost', 'root', '', 'xinawangspeed') or die('Koneksi Gagal');

    if( isset($_POST["regis"]) ){
        
        if( registrasi($_POST) > 0 ){
            echo "<script> 
                    alert('admin baru telah ditambahkan!');
                 </script>";
        }else {
            echo mysqli_error($connection);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

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

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@600&display=swap" rel="stylesheet">
    

    <title>Regis | XinawangSpeed</title>
</head>
<body>
    <section class="vh-100 bg-dark" >
    <div class="container p-5  shadow col-5 position-absolute top-50 start-50 translate-middle bg-light">
    <h1 class="mb-3 tex-center">Create New Account</h1>

    <a href="login.php" class="btn btn-primary btn-sm mb-3" tabindex="-1" role="button">back to login</a>

    <form action="" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="username" class="form-control shadow-lg" id="username" name="username" placeholder="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control shadow-lg" id="password" name="password" placeholder="password">
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control shadow-lg" id="password2" name="password2" placeholder="confirm password">
        </div>
        <button type="submit" class="btn btn-primary" name="regis" id="regis">Submit</button>
        </div>
    </form>

</body>
</html>
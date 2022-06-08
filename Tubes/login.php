<?php 
    session_start();

    if( isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require 'functions.php';
    $connection = mysqli_connect('localhost', 'root', '', 'xinawangspeed') or die('Koneksi Gagal');


    if(isset($_POST["login"]) ) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($connection, "SELECT * FROM admin WHERE username = '$username' ");

            // cek username
        if( mysqli_num_rows($result) === 1) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])) {
                // set session
                $_SESSION["login"] = true;


                header("Location: index.php");
                exit;
            }
        }

        $error = true;
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
    
    <title>Login | XinawangSpeed</title>
</head>
<body>
    <section class="vh-100" style="background-color: #708090;">
    <div class="container p-5 shadow col-4 position-absolute top-50 start-50 translate-middle" 
    style="background-color: #A9A9A9;">
    <h2 class="mb-5 text-center">Welcome Admin</h2>

    <?php if(isset($error) ) : ?>
        <p style="color : red; font-style: italic"> Username/Password salah</p>
    <?php endif ?>

    <form action="" method="post" class="text-center">
        <div class="mb-3">
            <label for="username" class="form-label ">Username</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary mx-2 px-4" name="login" id="login">Login</button>
        <a href="registrasi.php" class="btn btn-primary mx-2 px-2" tabindex="-1" role="button">Registrasi</a>
        </div>
    </form>

</body>
</html>
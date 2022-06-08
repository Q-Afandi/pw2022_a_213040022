<?php
    // session
    session_start();

    if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    }
    //akhir session


require 'functions.php';


if(delete($_GET["id"]) > 0) {
    echo "<script>
            alert ('data berhasil dihapus');
            document.location.href = 'product.php'; 
            </script>";
} 


?>
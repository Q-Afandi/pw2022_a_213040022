<?php
    // session
    session_start();

    if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
    }
    //akhir session


require 'aFunctions.php';


if(delete($_GET["id"]) > 0) {
    echo "<script>
            alert ('data berhasil dihapus');
            document.location.href = 'admin.php'; 
            </script>";
} else { 
    echo "<script>
alert ('data gagal dihapus');
document.location.href = 'admin.php'; 
</script>";}


?>
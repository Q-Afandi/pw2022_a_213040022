<?php

require 'functions.php';


if(delete($_GET["id"]) > 0) {
    echo "<script>
            alert ('data berhasil dihapus');
            document.location.href = 'product.php'; 
            </script>";
} 


?>
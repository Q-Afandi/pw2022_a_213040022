<?php 
require 'vendor/autoload.php';

// require_once 'dompdf/autoload.inc.php';

require 'functions.php';
$product = query("SELECT * FROM product");

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$options = new Options();
$options->set('isRemoteEnabled',true);      
$dompdf = new Dompdf( $options );

$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous"
  />
  

  <title>DATA PRODUCT</title>
</head>
<body>
<h2 class="text-center">DATA PRODUCT</h2>
<table class="table">
<thead>
  <tr>
    <th scope="col">No</th>
    <th scope="col">Gambar</th>
    <th scope="col">Name</th>
    <th scope="col">Category</th>
    <th scope="col">Price</th>
    <th scope="col">Stok</th>
  </tr>';

  $no = 1;
  foreach ($product as $prod) {
    $html .= '<tr>
      <td class="align-middle">' . $no++ . '</td>    
      <td class="align-middle"><img src="img/'. $prod["gambar"] .'"
      width="50"></td>
      <td class="align-middle">' . $prod["name"] .'</td>
      <td class="align-middle">' . $prod["category"] .'</td>
      <td class="align-middle">' . $prod["price"] .'</td>
      <td class="align-middle">' . $prod["stok"] .'</td>
    </tr>';
  }

$html .= '</table>
</body>
</html>';



$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>
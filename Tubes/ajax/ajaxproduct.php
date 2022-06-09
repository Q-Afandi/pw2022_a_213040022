<?php 
    require '../functions.php';

    $keyword = $_GET['keyword'];
    
    $query = $query = "SELECT * FROM product WHERE 
            name LIKE '%$keyword%' OR 
            category LIKE '%$keyword%' OR 
            price LIKE '%$keyword%' 
            ";
    $product = query($query);  
?>
<table class="table table-dark table-striped table-hover mt-3">
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
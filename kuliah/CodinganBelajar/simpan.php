
      //pagination
      //konfigurasi
      $jumlahDataPerhalaman = 5;
      $jumlahData = count(query("SELECT * FROM product"));
      $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
      $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
       

      $awalData = ( $jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

      $product = query("SELECT * FROM product LIMIT $awalData, $jumlahDataPerhalaman");


<!-- Navigasi Pagination -->
<nav aria-label="">
  <ul class="pagination justify-content-center">

      <?php if( $halamanAktif > 1) :?>
        <li class="page-item">
          <a class="page-link" href="?halaman=<?= $halamanAktif - 1;?>" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <?php else : ?>
        <li class="page-item disabled">
          <a class="page-link" href="" tabindex="-1" aria-disabled="true">Previous</a>
      <?php endif; ?>
        </li>
    

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if( $i == $halamanAktif) : ?>
    <li class="page-item"><a class="page-link bg-dark" href="?halaman=<?= $i; ?>" ><?= $i; ?></a></li>
        <?php else : ?>
          <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>" ><?= $i; ?></a></li>
          <?php endif; ?>
    <?php endfor; ?>

        <?php if( $halamanAktif < $jumlahHalaman ) : ?>
        <li class="page-item">
          <a class="page-link" href="?halaman=<?= $halamanAktif + 1;?>">Next</a>
        </li>
        <?php else : ?>
          <li class="page-item disabled">
          <a class="page-link" href="" tabindex="-1" aria-disabled="true">Next</a>
        </li>
        <?php endif; ?>
    </li>
  </ul>
</nav>
      <!-- Penutup Navigasi Pagination -->
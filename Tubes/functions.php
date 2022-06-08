<?php 

    function koneksi() {
        $connection = mysqli_connect('localhost', 'root', '', 'xinawangspeed') or die('Koneksi Gagal');

        return $connection;
    }

    function query($query) {
        $connection = koneksi ();
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

        $rows = []; 
        while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
        }

        return $rows;
    }

        function tambah($data) {

            $connection = koneksi();

            $name = htmlspecialchars($data["name"]);
            $category = htmlspecialchars($data["category"]);
            $price = htmlspecialchars($data["price"]);
            $stok = htmlspecialchars($data["stok"]);
            
            // Upload gambar 
            $gambar = upload();
            if( !$gambar) {
                return false;
            }

            $query = "INSERT INTO product VALUES (null, '$name', '$category', '$price', '$stok', '$gambar')";

            mysqli_query($connection, $query) or die (mysqli_error($connection));

            return mysqli_affected_rows($connection);
        }

        function upload(){
            $namaFile = $_FILES['gambar']['name'];
            $ukuranFile = $_FILES['gambar']['size'];
            $error = $_FILES ['gambar']['error'];
            $tmpName = $_FILES['gambar']['tmp_name'];

            //cek apakah ada gambar yang di upload 
            if( $error === 4){
                echo"<script>
                        alert('pilih gambar terlebih dahulu!');
                        </script>";
            }

            // cek apakah yang diupload hanya gambar
            $ekstensiGambarValid = ['jpg','jpeg','png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower (end($ekstensiGambar));
            if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
                echo"<script>
                alert('yang diupload bukan gambar!');
                </script>";
                return false;
            }

            // cek jika ukuran terlalu besar
            if(  $ukuranFile > 1000000) {
                echo"<script>
                alert('ukuran gambar terlalu besar!');
                </script>";
                return false;
            }
            // generate nama gambar
            $namaFileBaru = uniqid();
            $namaFileBaru .=  '.';
            $namaFileBaru .= $ekstensiGambar;

            //lolos pengecekan gambar siap diupload
            move_uploaded_file($tmpName, 'img/' . $namaFileBaru );

            return $namaFileBaru;

        }

        function delete($id) {
            $connection = koneksi();
            mysqli_query($connection, "DELETE FROM product WHERE id = $id") or die
            (mysqli_error($connection));

            return mysqli_affected_rows($connection);
        }

        function edit($data) {
            $connection = koneksi();
        
            $id = $data["id"];
            $name = htmlspecialchars($data["name"]);
            $category = htmlspecialchars($data["category"]);
            $price = htmlspecialchars($data["price"]);
            $stok = htmlspecialchars($data["stok"]);
            $gambarLama = htmlspecialchars($data["gambarLama"]);

             // cek user pilih gambar baru atau tidak
             if( $_FILES['gambar']['error'] === 4){
                    $gambar = $gambarLama;
             }else {
                $gambar = upload();
             }


            
        
            $query = "UPDATE product SET 
                    name = '$name',
                    category = '$category',
                    price = '$price',
                    stok = '$stok',
                    gambar = '$gambar'
                    WHERE id = $id ";

            mysqli_query($connection, $query) or die (mysqli_error($connection));

            return mysqli_affected_rows ($connection);
        }

        function search($keyword) {
            $query = "SELECT * FROM product WHERE 
                name LIKE '%$keyword%' OR 
                category LIKE '%$keyword%' OR 
                price LIKE '%$keyword%' 
                ";

            return query($query);
        }   

        function registrasi($data) {
            $connection = koneksi();

            $username = strtolower(stripslashes($data["username"]));
            $password = mysqli_real_escape_string($connection, $data["password"]);
            $password2 = mysqli_real_escape_string($connection, $data["password2"]);

            // cek username sudah ada atau belum
            $result = mysqli_query($connection, "SELECT username FROM admin WHERE 
            username = '$username'");

            if( mysqli_fetch_assoc($result)) {
                echo "<script> 
                alert('username sudah terdaftar');
              </script>";
              return false;
            }

            // cek confirm password
            if( $password !== $password2) {
                echo "<script> 
                        alert('konfirmasi password tidak sesuai!');
                      </script>";
                      return false;
            }
            // enkripsi password 
            $password = password_hash($password, PASSWORD_DEFAULT);

            // tambahkan userbaru ke database
            mysqli_query($connection, "INSERT INTO admin VALUES('', '$username', '$password' )");
            
            return mysqli_affected_rows($connection);
        }

?>

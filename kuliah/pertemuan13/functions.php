<?php 

    function koneksi() {
        $connection = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040022') or die('Koneksi Gagal');

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

            // cek apakah user tidak memi$gambarlih gambar
            if($_FILES["gambar"]["error"] === 4) {
                $gambar = 'S-v4.png';
            }else {
                // lakukan fungsi upload
                $gambar = upload();
                // cek jika upload gagal
                if(!$gambar){
                  return false;  
                }
            }

            $npm = htmlspecialchars($data["npm"]);
            $nama = htmlspecialchars($data["nama"]);
            $email = htmlspecialchars($data["email"]);
            $jurusan = htmlspecialchars($data["jurusan"]);
            // $gambar = htmlspecialchars($data["gambar"]);    

            $query = "INSERT INTO mahasiswa VALUES (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";

            mysqli_query($connection, $query) or die (mysqli_error($connection));

            return mysqli_affected_rows ($connection);
        }

        function upload(){
            // siapkan data gambar
            $fileName = $_FILES["gambar"]["name"];
            $filetmpname = $_FILES["gambar"]["tmp_name"];
            $filesize = $_FILES["gambar"]["size"];
            $filetype = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowedtype = ['jpg', 'jpeg', 'png'];

            // cek apakah file bukan gambar
            if(!in_array($filetype, $allowedtype)) {
                echo"<script>
                alert('yang diupload bukan gambar!');
                </script>";
                     return false;
            }

            //cek jika gambar terlalu besar
            if($filesize > 1000000){
                echo"<script>
                alert('ukuran gambar terlalu besar!');
                </script>";
                 return false;
            }

            // proses upload gambar
            $newfileName = uniqid() . $fileName;
            move_uploaded_file($filetmpname, 'img/' . $newfileName);
            return $newfileName;
        }
    

        function hapus($id) {
            $connection = koneksi();

            //query mahasiswa berdasarkan id 
            $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
            // cek jika gambar default
            if($mhs["gambar"] !== 'S-v4.png'){
            // hapus gambar
            unlink('img . $mhs["gambar"]');
        }

            mysqli_query($connection, "DELETE FROM mahasiswa WHERE id = $id") or die
            (mysqli_error($connection));

            return mysqli_affected_rows($connection);
        }


        function ubah($data) {
            $connection = koneksi();

            $id = $data["id"];
            $npm = htmlspecialchars($data["npm"]);
            $nama = htmlspecialchars($data["nama"]);
            $email = htmlspecialchars($data["email"]);
            $jurusan = htmlspecialchars($data["jurusan"]);
            $gambar = htmlspecialchars($data["gambar"]);

            $query = "UPDATE mahasiswa SET 
                    npm = '$npm',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                    WHERE id = $id ";

            mysqli_query($connection, $query) or die (mysqli_error($connection));

            return mysqli_affected_rows ($connection);
        }

?>

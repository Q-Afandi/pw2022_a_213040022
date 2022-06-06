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

            $npm = $data["npm"];
            $nama = $data["nama"];
            $email = $data["email"];
            $jurusan = $data["jurusan"];
            $gambar = $data["gambar"];

            $query = "INSERT INTO mahasiswa VALUES (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";

            mysqli_query($connection, $query) or die (mysqli_error($connection));

            return mysqli_affected_rows ($connection);
        }
    


?>

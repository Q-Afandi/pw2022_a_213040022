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

            $npm = htmlspecialchars($data["npm"]);
            $nama = htmlspecialchars($data["nama"]);
            $email = htmlspecialchars($data["email"]);
            $jurusan = htmlspecialchars($data["jurusan"]);
            $gambar = htmlspecialchars($data["gambar"]);

            $query = "INSERT INTO mahasiswa VALUES (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";

            mysqli_query($connection, $query) or die (mysqli_error($connection));

            return mysqli_affected_rows ($connection);
        }
    

        function hapus($id) {
            $connection = koneksi();
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

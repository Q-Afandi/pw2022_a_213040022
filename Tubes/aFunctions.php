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
    function delete($id) {
        $connection = koneksi();
        mysqli_query($connection, "DELETE FROM admin WHERE id = $id") or die
        (mysqli_error($connection));

        return mysqli_affected_rows($connection);
    }

?>
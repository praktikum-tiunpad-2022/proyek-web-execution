<?php

include 'connection.php';

if(isset($_POST['submit'])) {
    $id_plg = $_POST['id_plg'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];

    $sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat, no_telp) 
            VALUES ('$id_plg', '$nama', '$alamat', '$telpon')";
}
?>
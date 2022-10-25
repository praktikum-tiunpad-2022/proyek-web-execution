<?php

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];

    echo "Nama  : " .$nama. "<br>";
    echo "Alamat    : " .$alamat. "<br>";
    echo "No Telpon    : " .$telpon. "<br>";
}
?>
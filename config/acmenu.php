<?php 
    require('db.php');

    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    mysqli_query($koneksi, "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES('$nama','$keterangan','$harga', '$jumlah')");
    // redirect
    header('location: ../index.php')
?>
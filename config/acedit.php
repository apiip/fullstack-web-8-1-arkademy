<?php 
    require("db.php");

    $title = $_POST['nama'];
    $content = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['keterangan'];
    $id = $_POST['id'];

    mysqli_query($koneksi, "UPDATE produk SET nama_produk ='$title', keterangan ='$deskripsi', harga ='$harga', jumlah ='$content' WHERE id = $id ");

    header('location: ../index.php')
?>
<?php 
    require("db.php");

    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE from produk where id=$id");

    header("location: ../index.php");

?>
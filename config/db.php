<?php 
   $koneksi = mysqli_connect("localhost", "root", "", "arkademy");

   if (!$koneksi) {
       echo "gagal koneksi";
   }
?>
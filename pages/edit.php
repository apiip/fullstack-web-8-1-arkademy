<?php
    require("../config/db.php");

    $id = $_GET['id'];
    $edit = mysqli_query($koneksi, "SELECT * FROM produk where id = $id");
    $edit = mysqli_fetch_assoc($edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Edit Article</title>
</head>
<body>

<!-- form -->
    <div class="container m-4">
        <h2 class="alert alert-info">Edit Data Produk</h2>

        <form method="POST" action="../config/acedit.php">
            <p>
            <label for="">Nama</label><br>
            <input type="text" name="nama" value="<?=$edit['nama_produk'] ?>">
            </p>

            <p>
            <label for="">Jumlah</label><br>
            <input type="text" maxlength="2" value="<?=$edit['jumlah']?>" name="jumlah" onkeypress="return hanyaAngka(event)"/>
            </p>

            <p>
            <label for="">Harga</label><br>
            <input type="text" maxlength="2" value="<?=$edit['harga']?>" name="harga" onkeypress="return hanyaAngka(event)"/>
            </p>


            <p>
                <label for="">Keterangan</label><br>
                <textarea name="keterangan" id="" cols="30" rows="3"> <?= $edit['keterangan']?></textarea>
            </p>


            <input type="hidden" name="id" value="<?= $id ?>">

            <p><input type="submit" value="Edit Data"></p>
            <a href="../index.php">Batal</a>
        </form>
    </div>
<!-- end form -->


</body>


<!-- mulai script hanya angka untuk text area stok -->
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
<!-- akhir script hanya angka untuk text area stok -->
<!-- script -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="script.js"></script>
<!-- end script -->
</html>
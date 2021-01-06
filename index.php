<?php 
    require("./config/db.php");

    // produk
    $data = mysqli_query($koneksi, "SELECT * FROM produk");
    // kalo buat kombo box pilihan pake fetch all enak
    $categories = mysqli_fetch_all($data, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Produk Arka</title>
</head>
<body>
<!-- start nav -->
<!-- start content -->
   
<!-- isi -->
<br><br>
<div class="row" style="margin-top=30px">

<div class="col-4">
<div class="card" style="width: 18rem; margin-left : 70px; margin-bottom : 70px">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <form method="POST" action="./config/acmenu.php">
        <p>
        <label for="">Nama</label><br>
        <input type="text" name="nama">
        </p>
    
        <p>
        <label for="">Jumlah</label><br>
        <input type="text" maxlength="2" name="jumlah" onkeypress="return hanyaAngka(event)"/>
        </p>

        <p>
        <label for="">harga</label><br>
        <input type="text" name="harga" onkeypress="return hanyaAngka(event)"/>
        </p>

        <p>
        <label for="">Keterangan</label><br>
        <textarea name="keterangan" id="" cols="30" rows="3"></textarea>
        </p>
        <input type="submit" value="Buat Data" class="btn btn-primary">
    </form>
  </div>
</div>

</div>



<div class="col-7 alert alert-light">
<h4 class="alert alert-success justify-conten-center">Produk</h4>
<div class="row container pager">
    <?php if (mysqli_num_rows($data) > 0) { ?>
    <?php foreach($categories as $category) { ?>
        <div class="col-md4 pager">
        <div class="card" style="width: 15rem;">
        <img src="./foto/download.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $category['nama_produk']; ?></h5>
        <p><?php echo $category['keterangan']; ?></p>
        <label id="stok" for="">Stok : <?php echo $category['jumlah']; ?> </label>

        <label for=""><?php if ($category['jumlah'] > 0) {
            echo '<span class="badge badge-primary">Tersedia</span>';
        } else {
            echo '<span class="badge badge-danger">Habis</span>';
        }?>
        </label>
        <br>
        <a href="./pages/detail.php?id=<?=$category['id']?>" id="coba" class="btn btn-primary coba">Detail</a>
        </div>
                        
    </div>
    </div>
    <?php } ?>

    <?php } else { ?>
        <h1> Maaf Belum Ada Data, Silahkan Ditambahkan </h1>
    <?php } ?>
</div>
</div>

</div>
<!-- end Isi -->

<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="modalPesan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul">Perhatian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="isiMod"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->

</body>


<!-- script -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="script.js"></script>
<!-- end script -->
</html>
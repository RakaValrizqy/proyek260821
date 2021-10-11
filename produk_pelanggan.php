<?php 

    include "header_pelanggan.php";

    

?>

<h2>Daftar Produk</h2>

<div class="row">

    <?php 

    include "koneksi.php";

    $qry_produk=mysqli_query($conn,"select * from produk ORDER BY nama_produk");

    while($dt_produk=mysqli_fetch_array($qry_produk)){

        ?>

        <div class="col-md-3">

            <div class="card" >

              <img src="foto/<?=$dt_produk['foto produk']?>" class="card-img-top">

              <div class="card-body">

                <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>

                <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,100)?></p>
                <p class="card-text"> Rp <?=$dt_produk['harga']?></p>

                <a href="beli_pelanggan.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli</a>

              </div>

            </div>

        </div>

        <?php

    }

    ?>

</div>

<?php 

    include "footer_pelanggan.php";

?>
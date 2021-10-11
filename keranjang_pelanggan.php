<?php 

    include "header_pelanggan.php";

?>

<h2>Daftar Produk di Keranjang</h2>

<table class="table table-hover striped">

    <thead>

        <tr>

            <th>NO</th>
            <th>Nama produk</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>

        </tr>

    </thead>

    <tbody>

        <?php

        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
        $subtotal=$val_produk['subtotal'];
        $subtotal2=number_format($subtotal,2);?>

            <tr>

                <td><?=($key_produk+1)?></td>
                <td><?=$val_produk['nama_produk']?></td>
                <td><?=$val_produk['qty']?></td>
                <td><?php echo("Rp ".$subtotal2);?></td>
                <td><a href="hapus_cart_pelanggan.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>

            </tr>


        <?php endforeach ?>

    </tbody>

</table>

<a href="produk_pelanggan.php" class="btn btn-success">Tambah Produk</a>
<a href="checkout_pelanggan.php" class="btn btn-primary">Check Out</a>

<?php 

    include "footer_pelanggan.php";

?>
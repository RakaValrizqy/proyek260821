<?php 

    include "header_pelanggan.php";

?>

<h2>Histori Pembelian Produk</h2>

<table class="table table-hover table-striped">

    <thead>

        <th>NO</th>
        <th>Tanggal Pembelian</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Subtotal</th>
        <th>Status</th>

    </thead>

    <tbody>

        <?php 

        include "koneksi.php";

        $qry_histori=mysqli_query($conn,"select * from transaksi order by id_transaksi desc");

        $no=0;

        while($dt_histori=mysqli_fetch_array($qry_histori)){

            $no++;

            //menampilkan produk yang dibeli

            $produk_beli="<ol>";
            $qty="<ol>";
            $subtotal="<ol>";

            $qry_produk=mysqli_query($conn,"select * from  detail_transaksi join produk on produk.id_produk=detail_transaksi.id_produk where id_transaksi = '".$dt_histori['id_transaksi']."'");

            while($dt_produk=mysqli_fetch_array($qry_produk)){

                $produk_beli.="<li>".$dt_produk['nama_produk']."</li>";
                $qty.="<li>".$dt_produk['qty']."</li>";
                $subtotal.="<li>".$dt_produk['subtotal']."</li>";
            }

            $produk_beli.="</ol>";
            $qty.="</ol>";
            $subtotal.="</ol>";

        ?>

            <tr>

                <td><?=$no?></td>
                <td><?=$dt_histori['tgl_transaksi']?></td>
                <td><?=$produk_beli?></td>
                <td><?=$qty?></td>
                <td><?=$subtotal?></td>
                <td><?php echo("Diproses")?></td>

            </tr>

        <?php

        }

        ?>

    </tbody>

</table>

<?php 

    include "footer_pelanggan.php";

?>
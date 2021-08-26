<?php

if($_POST){

    $nama_pelanggan=$_POST['nama_pelanggan'];

    $alamat=$_POST['alamat'];

    $telp=$_POST['telp'];

    if(empty($nama_pelanggan)){

        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($telp)){
        
        echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } else {

        include "koneksi.php";

        $insert=mysqli_query($conn,"INSERT INTO `pelanggan` (`nama`, `alamat`, `telp`) VALUES ('$nama_pelanggan', '$alamat', '$telp');");

        if($insert){

            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";

        }

    }

}

?>
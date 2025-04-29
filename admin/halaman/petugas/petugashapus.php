<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idbuku yang akan dihapus sebagai referensi
    $idpetugas=$_GET['idpetugas'];

    //query untuk menghapus data buku
    mysqli_query($sambung,"delete from tbl_petugas where idpetugas='$idpetugas'");

    //arahkan ke halaman data buku setelah menghapus 1 data buku
    header("location:../../index.php?page=petugas");
?>
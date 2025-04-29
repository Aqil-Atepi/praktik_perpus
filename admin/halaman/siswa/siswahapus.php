<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idbuku yang akan dihapus sebagai referensi
    $idsiswa=$_GET['idsiswa'];

    //query untuk menghapus data buku
    mysqli_query($sambung,"delete from tbl_siswa where idsiswa='$idsiswa'");

    //arahkan ke halaman data buku setelah menghapus 1 data buku
    header("location:../../index.php?page=siswa");
?>
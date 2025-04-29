<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $idpetugas      = $_POST['idpetugas'];
    $namapetugas    = $_POST['namapetugas'];
    $hp             = $_POST['hp'];
    $username       = $_POST['username'];
    
    //update data dari database 
    mysqli_query($sambung,"update tbl_petugas set namapetugas='$namapetugas',hp='$hp',username='$username' where idpetugas='$idpetugas'"); 

    //mengalihkan ke halaman daftar buku 
    header("location:../../index.php?page=petugas"); 
?>
<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $idpetugas     = $_POST['idpetugas'];
        $namapetugas      = $_POST['namapetugas'];
        $hp  = $_POST['hp'];
        $username   = $_POST['username'];

        mysqli_query($sambung,"insert into tbl_petugas (idpetugas,namapetugas,hp,username) values ('$idpetugas','$namapetugas','$hp','$username')");
    }

    header("location:../../index.php?page=petugas");
?>
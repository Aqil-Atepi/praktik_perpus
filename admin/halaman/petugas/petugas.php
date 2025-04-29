<h3>
    <center>Daftar Petugas BILIBRARY</center>
</h3>
<p>
<h3>
    <center>SMK BINA INFORMATIKA</center>
</h3>
<a href="index.php?page=petugastambah" class="tambah">Tambah Petugas</a>

<!--awal table-->
<table align="center" border="1">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID Petugas</td>
        <td width="30%" align="center">Nama Petugas</td>
        <td width="10%" align="center">No Hp</td>
        <td width="25%" align="center">Username</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";
        
        //ambil data dari tabel tbl_buku
        $ambildata     = mysqli_query($sambung,"SELECT * FROM tbl_petugas");
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>

        <!--awal menampilkan data dari tabel buku ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo $tampildata['idpetugas'] ?></td>
            <td> <?php echo $tampildata['namapetugas'] ?></td>
            <td> <?php echo $tampildata['hp']?></td>
            <td> <?php echo $tampildata['username']?></td>
            <td align="center">
                <a href="../admin/index.php?page=petugasubah&idpetugas=<?php echo $tampildata['idpetugas'];?>">
                    Edit
                </a>
                |
                <a href="halaman/petugas/petugashapus.php?idpetugas=<?php echo $tampildata['idpetugas'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Petugas?')">
                    Delete
                </a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
        }
    ?>
</table>
<!--akhir table-->
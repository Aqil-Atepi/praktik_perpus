<h3>
    <center>Daftar Siswa BILIBRARY</center>
</h3>
<p>
<h3>
    <center>SMK BINA INFORMATIKA</center>
</h3>
<a href="index.php?page=siswatambah" class="tambah">Tambah Siswa</a>

<!--awal table-->
<table align="center" border="1">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID Siswa</td>
        <td width="30%" align="center">NIS</td>
        <td width="10%" align="center">Nama Siswa</td>
        <td width="25%" align="center">Kelas</td>
        <td width="20%" align="center">Alamat</td>
        <td width="20%" align="center">No Hp</td>
        <td width="20%" align="center">Aksi</td>
        
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";
        
        //ambil data dari tabel tbl_buku
        $ambildata     = mysqli_query($sambung,"SELECT * FROM tbl_siswa");
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>

        <!--awal menampilkan data dari tabel buku ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo $tampildata['idsiswa'] ?></td>
            <td> <?php echo $tampildata['nis'] ?></td>
            <td> <?php echo $tampildata['namasiswa']?></td>
            <td> <?php echo $tampildata['kelas']?></td>
            <td> <?php echo $tampildata['alamat']?></td>
            <td> <?php echo $tampildata['hp']?></td>
            <td align="center">
                <a href="../admin/index.php?page=siswaubah&idsiswa=<?php echo $tampildata['idsiswa'];?>">
                    Edit
                </a>
                |
                <a href="halaman/siswa/siswahapus.php?idsiswa=<?php echo $tampildata['idsiswa'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Siswa?')">
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
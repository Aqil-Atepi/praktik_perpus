<a href="index.php?page=petugas" class="tambah">Kembali ke Data Petugas</a>
<br /><br />
<?php
    include "../koneksi.php";
    $idpetugas = $_GET['idpetugas'];
    $ambildata = mysqli_query($sambung, "select * from tbl_petugas where idpetugas='$idpetugas'");
    while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

    <form action="halaman/petugas/petugasubah_aksi.php" method="post" name="formubah">
        <table>
            <tr>
                <td>ID Petugas</td>
                <td><input type="text" name="idpetugas" value="<?php echo $tampildata['idpetugas'] ?>" readonly></td>
            </tr>

            <tr>
                <td>Nama Petugas</td>
                <td><input type="text" name="namapetugas" value="<?php echo $tampildata['namapetugas'] ?>"></td>
            </tr>

            <tr>
                <td>No Hp</td>
                <td><input type="text" name="hp" value="<?php echo $tampildata['hp'] ?>"></td>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $tampildata['username'] ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="tombolubah" value="Ubah" class="button-ubah"  onclick="return confirm('Apa Anda yakin akan mengubah data petugas?')">
            </tr>
        </table>
    </form>

<?php
}
?>
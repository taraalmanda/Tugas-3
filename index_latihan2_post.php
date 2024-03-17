<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENYEWAAN</title>
</head>

<body>
    <form action="welcome_latihan2_post.php" method="post">
        Judul Buku: <input type="text" name="judul_buku"><br>
        Kategori Buku: <select name="kategori_buku">
            <option value="fiksi" selected>Fiksi</option>
            <option value="non_fiksi" selected>Non Fiksi</option>
            <option value="karya ilmiah" selected>Karya Ilmiah</option>
            <option value="majalah" selected>Majalah</option>
        </select><br>
        Tanggal Pinjam: <select name="tanggal_pinjam">
            <option selected="selected"> Tanggal</option>
            <?php
            for ($a = 1; $a <= 31; $a += 1) {
                echo "<option value =$a> $a </option>";
            }
            ?>
        </select>
        <select name="bulan_pinjam">
            <option selected="selected"> Bulan</option>
            <?php
            $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            $jumlah_bulan = count($bulan);
            for ($a = 0; $a <= $jumlah_bulan; $a += 1) {
                echo "<option value =$bulan[$a]> $bulan[$a] </option>";
            }
            ?>
        </select>
        <select name="tahun_pinjam">
            <option selected="selected"> Tahun</option>
            <?php
            for ($a = 2024; $a >= 2019; $a -= 1) {
                echo "<option value =$a> $a </option>";
            }
            ?>
        </select><br>
        Lama Pinjam: <input type="text" name="lama_pinjam" size="1"> Hari<br>
        Nama Anggota: <input type="text" name="nama_anggota"><br>
        Nama Petugas: <select name="nama_petugas">
            <option value="Iqbaal_Ramadhan" selected>Iqbaal Ramadhan</option>
            <option value="Angga_Yunanda" selected>Angga Yunanda</option>
            <option value="Refal Hadi" selected>Refal Hadi</option>
        </select><br>


        <input type="submit" name="btnSimpan" value="Simpan" />
        <input type="reset" name="btnBatal" value="Batal" />
    </form>
</body>

</html>
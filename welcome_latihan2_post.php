<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENYEWAAN</title>
</head>

<body>
    <?php
    $judul_buku = $_POST["judul_buku"];
    $kategori_buku = $_POST["kategori_buku"];
    $tanggal_pinjam = $_POST["tanggal_pinjam"];
    $bulan_pinjam = $_POST["bulan_pinjam"];
    $tahun_pinjam = $_POST["tahun_pinjam"];
    $lama_pinjam = $_POST["lama_pinjam"];
    $nama_anggota = $_POST["nama_anggota"];
    $nama_petugas = $_POST["nama_petugas"];

    $harga=0;
    if ($kategori_buku == "karya ilmiah") {
        $harga = 10000;
    }
    else {
        $harga = 5000;
    }
    $total = $harga*$lama_pinjam;

    echo "Judul Buku: $judul_buku<br>";
    echo "Kategori Buku: $kategori_buku<br>";
    echo "Tanggal Pinjam: $tanggal_pinjam<br>";
    echo "Lama Pinjam: $lama_pinjam<br>";
    echo "Nama Anggota: $nama_anggota<br>";
    echo "Nama Petugas: $nama_petugas<br>";
    echo "Total : $total <br>";
    
    ?>

<a href="index_latihan2_post.php" class="underline decoration-solid">kembali</a>
</body>

</html>
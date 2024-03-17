<?php
if(isset($_POST['btnSubmit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tanggallahir = $_POST["tanggal_lahir"];
    $programstudi = $_POST["program_studi"];
    $alamat = $_POST["alamat"];
    $handphone = $_POST["handphone"];
    $jeniskelamin = $_POST["jenis_kelamin"];
    echo "Selamat Datang $name<br>";
    echo "Email: $email<br>";
    echo "Password: $password<br>";
    echo "Tanggal lahir: $tanggallahir<br>";
    echo "Program studi: $programstudi<br>";
    echo "Alamat: $alamat<br>";
    echo "Nomor handphone: $handphone<br>";
    echo "Jenis Kelamin: $jeniskelamin<br>";
    echo '<script>alert("Sign Up Berhasil"); window.location.href = "Latihan1W4.php";</script>';


} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir"><br>
        Program Studi: <select name="program_studi">
            <option value="Manajemen" selected>Manajemen</option>
            <option value="Sistem Informasi" selected>Sistem Informasi</option>
            <option value="Ilmu Komputer" selected>Ilmu Komputer</option>
            <option value="Teknik Industri" selected>Teknik Industri</option>
            <option value="Psikologi" selected>Psikologi</option>
            <option value="Ilmu Komunikasi" selected>Ilmu Komunikasi</option>
            <option value="Sastra Inggris" selected>Sastra Inggris</option>
            </select><br>
        Alamat: <textarea id="alamat" name="alamat" row="4" cols="50">
            </textarea><br>
        Handphone: <input type="text" name="handphone"><br>
        Jenis Kelamin: <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
        <br>
        <input type="submit" name="btnSubmit" value="Submit" />
        <input type="reset" name="reset" value="Reset" />
</form>
</body>
</html>
<?php
}
?>
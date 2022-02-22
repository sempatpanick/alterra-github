<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <form action="/" method="post">
        <h1>Input Data Mahasiswa Baru Universitas Bandung</h1>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama mahasiswa..">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nama" placeholder="Masukkan nim mahasiswa..">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="nama" placeholder="Masukkan tanggal lahir mahasiswa..">
        <button type="submit" name="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $tanggalLahir = $_POST['tanggal_lahir'];
            $nim = $_POST['nim'];

echo "Data berhasil diinput
<pre>
Nama          : ".$nama."
Tanggal Lahir : ".$tanggalLahir."
NIM           : ".$nim."
            </pre>
";
        }
    ?>
</body>
</html>
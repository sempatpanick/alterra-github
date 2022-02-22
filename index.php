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
        <h2>Input Data Mahasiswa Baru Universitas Bandung</h2>
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <label for="nim">NIM</label>
        <input type="text" name="nim">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir">
        <button type="submit" name="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tanggalLahir = $_POST['tanggal_lahir'];

echo "Data berhasil diinput
<pre>
Nama          : ".$nama."
NIM           : ".$nim."
Tanggal Lahir : ".$tanggalLahir."
            </pre>
";
        }
    ?>
</body>
</html>
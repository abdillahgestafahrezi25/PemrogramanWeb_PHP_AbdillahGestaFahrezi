<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form action="simpan_mahasiswa.php" method="post">
        <label>NIM</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Program Studi</label><br>
        <select name="prodi" required>
            <option value="">-- Pilih Prodi --</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
            <option value="Lainnya">Lainnya</option>
        </select><br><br>

        <label>Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="P" required> Perempuan
        <br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" rows="4" cols="40"></textarea><br><br>

        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
    </form>

    <br>
    <a href="tampil_mahasiswa.php">Lihat Data Mahasiswa</a>
</body>
</html>

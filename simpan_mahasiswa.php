<?php
include 'koneksi.php';

$nim           = isset($_POST['nim']) ? trim($_POST['nim']) : '';
$nama          = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$prodi         = isset($_POST['prodi']) ? trim($_POST['prodi']) : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$alamat        = isset($_POST['alamat']) ? trim($_POST['alamat']) : '';

if ($nim == '' || $nama == '' || $prodi == '' || $jenis_kelamin == '') {
    echo "Semua field (kecuali alamat) wajib diisi. <br>";
    echo "<a href='form_mahasiswa.php'>Kembali ke Form</a>";
    exit;
}

$nim           = mysqli_real_escape_string($koneksi, $nim);
$nama          = mysqli_real_escape_string($koneksi, $nama);
$prodi         = mysqli_real_escape_string($koneksi, $prodi);
$jenis_kelamin = mysqli_real_escape_string($koneksi, $jenis_kelamin);
$alamat        = mysqli_real_escape_string($koneksi, $alamat);

$sql = "INSERT INTO mahasiswa (nim, nama, prodi, jenis_kelamin, alamat)
        VALUES ('$nim', '$nama', '$prodi', '$jenis_kelamin', '$alamat')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan.<br>";
    echo "<a href='tampil_mahasiswa.php'>Lihat Data Mahasiswa</a><br>";
    echo "<a href='form_mahasiswa.php'>Input Lagi</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    echo "<br><a href='form_mahasiswa.php'>Kembali ke Form</a>";
}

mysqli_close($koneksi);
?>

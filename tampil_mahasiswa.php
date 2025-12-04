<?php
include 'koneksi.php';
$sql   = "SELECT * FROM mahasiswa ORDER BY nim";
$query = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        <?php
        $no = 1;
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$row['NIM']."</td>";
                    echo "<td>".$row['Nama']."</td>";
                    echo "<td>".$row['Prodi']."</td>";
                    echo "<td>".$row['jenis_kelamin']."</td>";
                    echo "<td>".$row['Alamat']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Belum ada data.</td></tr>";
            }
            ?>
    </table>
    <br>
    <a href="form_mahasiswa.php">Kembali ke Form Input</a>
</body>
</html>
<?php
mysqli_close($koneksi);
?>

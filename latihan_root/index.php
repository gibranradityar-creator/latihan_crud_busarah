<?php
require_once('koneksi.php');
echo "Koneksi berhasil<br><br>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>

    <h2>Data Siswa</h2>
    <a href="tambah.php">Tambah Siswa</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        $no = 1;
        while ($siswa = mysqli_fetch_assoc($data)) :
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $siswa['nama']; ?></td>
                <td><?= $siswa['kelas']; ?></td>
                <td><?= $siswa['jurusan']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $siswa['id']; ?>">Edit</a> | 
                    <a href="hapus.php?id=<?= $siswa['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>
<?php
require_once('koneksi.php');

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$id'");
$siswa = mysqli_fetch_assoc($data);

if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'");

    if ($query) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href='index.php';</script>";
    } else {
        echo "Data gagal diubah: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $siswa['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?= $siswa['kelas']; ?>" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?= $siswa['jurusan']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="edit">Update</button> <a href="index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
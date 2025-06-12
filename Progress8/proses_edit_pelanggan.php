<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $telepon = $_POST['Telepon'];
    $email = $_POST['Email'];

    // Siapkan query update
    $stmt = $conn->prepare("UPDATE pelanggan SET Nama=?, Alamat=?, Telepon=?, Email=? WHERE ID=?");
    $stmt->bind_param("ssssi", $nama, $alamat, $telepon, $email, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data pelanggan berhasil diperbarui'); window.location='lihat_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data pelanggan'); window.location='lihat_pelanggan.php';</script>";
    }
}
?>

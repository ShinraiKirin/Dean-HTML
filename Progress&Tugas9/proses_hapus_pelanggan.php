<?php
include 'koneksi_db.php'; 
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
    $stmt->bind_param("i", $id); // "i" untuk integer

    if ($stmt->execute()) {
        echo "<script>alert('Data pelanggan berhasil dihapus'); window.location='lihat_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data pelanggan: " . addslashes($stmt->error) . "'); window.location='lihat_pelanggan.php';</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('ID pelanggan tidak valid'); window.location='lihat_pelanggan.php';</script>";
}

$conn->close();
?>

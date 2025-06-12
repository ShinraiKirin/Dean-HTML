<?php
include 'koneksi_db.php'; // Koneksi database

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Query hapus data pesanan berdasarkan ID
    $query = "DELETE FROM Pesanan WHERE ID = $id";

    if ($conn->query($query) === TRUE) {
        // Redirect kembali ke daftar pesanan setelah berhasil hapus
        header("Location: lihat_transaksi.php?status=success");
        exit;
    } else {
        echo "Error menghapus data: " . $conn->error;
    }
} else {
    echo "ID pesanan tidak ditemukan.";
}
?>

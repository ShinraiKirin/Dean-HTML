<?php
include 'koneksi_db.php'; 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "DELETE FROM Pesanan WHERE ID = $id";

    if ($conn->query($query) === TRUE) {
        header("Location: lihat_transaksi.php?status=success");
        exit;
    } else {
        echo "Error menghapus data: " . $conn->error;
    }
} else {
    echo "ID pesanan tidak ditemukan.";
}
?>

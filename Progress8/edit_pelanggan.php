<?php
include 'koneksi_db.php';

if (!isset($_GET['id'])) {
    echo "ID pelanggan tidak ditemukan.";
    exit;
}

$id = intval($_GET['id']);

// Ambil data pelanggan berdasarkan ID
$stmt = $conn->prepare("SELECT * FROM pelanggan WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Data pelanggan tidak ditemukan.";
    exit;
}

$pelanggan = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
   <title>Edit Pelanggan</title>
</head>
<body>
   <?php include 'nav.php'; ?>
   <div class="container mt-4">
       <h2>Edit Pelanggan</h2>
       <form method="post" action="proses_edit_pelanggan.php">
           <input type="hidden" name="ID" value="<?= htmlspecialchars($pelanggan['ID']) ?>" />
           
           <div class="mb-3">
               <label for="Nama" class="form-label">Nama</label>
               <input type="text" class="form-control" id="Nama" name="Nama" required value="<?= htmlspecialchars($pelanggan['Nama']) ?>">
           </div>
           <div class="mb-3">
               <label for="Alamat" class="form-label">Alamat</label>
               <input type="text" class="form-control" id="Alamat" name="Alamat" required value="<?= htmlspecialchars($pelanggan['Alamat']) ?>">
           </div>
           <div class="mb-3">
               <label for="Telepon" class="form-label">Telepon</label>
               <input type="text" class="form-control" id="Telepon" name="Telepon" required value="<?= htmlspecialchars($pelanggan['Telepon']) ?>">
           </div>
           <div class="mb-3">
               <label for="Email" class="form-label">Email</label>
               <input type="email" class="form-control" id="Email" name="Email" required value="<?= htmlspecialchars($pelanggan['Email']) ?>">
           </div>
           <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
       </form>
   </div>
</body>
</html>
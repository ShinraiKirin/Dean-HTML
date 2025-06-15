<?php
include 'koneksi_db.php';
include 'session.php';

$query = "SELECT * FROM pelanggan ORDER BY ID ASC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
   <title>Daftar Pelanggan</title>
</head>
<body>
   <?php include 'nav.php'; ?>
   <div class="container mt-4">
       <h2>Daftar Pelanggan</h2>

       <table class="table table-striped">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Nama</th>
                   <th>Alamat</th>
                   <th>Telepon</th>
                   <th>Email</th>
                   <th>Aksi</th>
               </tr>
           </thead>
           <tbody>
               <?php if ($result->num_rows > 0): ?>
                   <?php while ($row = $result->fetch_assoc()): ?>
                       <tr>
                           <td><?= htmlspecialchars($row['ID']) ?></td>
                           <td><?= htmlspecialchars($row['Nama']) ?></td>
                           <td><?= htmlspecialchars($row['Alamat']) ?></td>
                           <td><?= htmlspecialchars($row['Telepon']) ?></td>
                           <td><?= htmlspecialchars($row['Email']) ?></td>
                           <td>
                               <a href="edit_pelanggan.php?id=<?= $row['ID'] ?>" class="btn btn-warning btn-sm">Edit</a>
                               <a href="proses_hapus_pelanggan.php?id=<?= $row['ID'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">Hapus</a>
                           </td>
                       </tr>
                   <?php endwhile; ?>
               <?php else: ?>
                   <tr>
                       <td colspan="6" class="text-center">Belum ada data pelanggan.</td>
                   </tr>
               <?php endif; ?>
           </tbody>
       </table>
   </div>

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

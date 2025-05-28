<?php
include 'Connect.php'; 

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    if (empty($npm) || empty($nama) || empty($prodi) || empty($semester) || empty($ukt)) {
        die("Semua field harus diisi!");
    }

    $stmt = mysqli_prepare($db, "INSERT INTO mahasiswa (NPM, Nama, Prodi, Semester, Ukt) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Gagal mempersiapkan statement: " . mysqli_error($db));
    }

    mysqli_stmt_bind_param($stmt, "sssis", $npm, $nama, $prodi, $semester, $ukt);

    if (mysqli_stmt_execute($stmt)) {
        echo "✅ Data berhasil disimpan!";
        header("Location: Index.php");
        exit();
    } else {
        echo "❌ Gagal menyimpan data: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "⚠️ Form belum disubmit dengan benar.";
}
?>
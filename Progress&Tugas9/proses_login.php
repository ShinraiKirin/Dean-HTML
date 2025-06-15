<?php
session_start();
include 'koneksi_db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];


   $stmt = $conn->prepare("SELECT id, nama, katasandi FROM user WHERE nama = ? AND katasandi = ?");
   $stmt->bind_param("ss", $username,$password);
   $stmt->execute();


   $result = $stmt->get_result();

   if ($result->num_rows === 1) {
       $user = $result->fetch_assoc();
       $_SESSION['id'] = $user['id'];
       $_SESSION['nama'] = $user['username'];
       $_SESSION['login'] = true;
       header("Location: index.php");
       exit;
      
   } else {


     header("Location: login.php?message=" . urlencode("password anda salah"));
   }


   $stmt->close();
}
?>
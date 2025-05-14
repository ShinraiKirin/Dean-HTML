<?php
   echo "Halo, selamat datang di dunia PHP!";
?>

<br>

<?php
   $nama = "Budi";
   $umur = 20;


   // Menampilkan nilai variabel
   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";
?>

<br>

<?php
define("SITE_NAME", "unsika.ac.id");
define("VERSION", "1.0");


echo "Selamat datang di " . SITE_NAME . "<br>";
echo "Versi Sistem: " . VERSION . "<br>";
?>

<br>

<?php
   $nama = "Andi";
   echo "Nama saya adalah" . $nama;
?>

<br>

<?php
   $berat = 55.5;
   echo "Berat badan saya ". $berat ."kg";
?>

<br>

<?php
   $isLogin = true;
?>

<br>

<?php
   $buah = ["apel", "jeruk", "mangga"];
   echo $buah[1];
?>

<br>

<?php
   class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "Jeni";
   echo $mhs->sapa();
?>

<br>

<?php
   $data = null;
   var_dump($data);
?>
<a href="../Tugas6/Tugas1/latihan_nilai.php">Nilai Mahasiswa</a>
<?php
// Switch Case
$hari = "Senin";

switch ($hari) {
   case "Senin":
       echo "Hari pertama kerja!" . "<br>";
       break;
   case "jum'at":
       echo "Solat jumat!" . "<br>";
       break;
   case "Minggu":
       echo "Libur akhir pekan!" . "<br>";
       break;
   default:
       echo "Hari biasa." . "<br>";
}

// For Loop (angka)
for ($i = 1; $i <= 5; $i++) {
   echo "Angka ke-" . $i . "<br>"; // Perbaikan kutip
}

// For Loop (array)
$buah = ["Apel", "Jeruk", "Mangga"];
for ($i = 0; $i < count($buah); $i++) {
   echo $buah[$i] . "<br>";
}

// While Loop
$nilai = 1;
while ($nilai <= 5) {
   echo "Nilai: ". $nilai ."<br>";
   $nilai++;
}

// Foreach
$mahasiswa = [
   "10001" => "Andi",
   "10002" => "Budi",
   "10003" => "Citra"
];
foreach ($mahasiswa as $nim => $nama) {
   echo "NIM: ". $nim .", Nama:". $nama."<br>";
}

// Ternary
$umur = 16;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";

echo $status;
?>

<!-- Include -->
<html>
   <body>
       <div class="menu">
           <?php include 'menu.php'; ?>
       </div>
   </body>
</html>

<?php
$kendaraan = "roda 4";


switch ($kendaraan) {
   case "roda 2":
       echo "Sepeda, Sepeda Motor, Skuter, ";
       break;
   case "roda 3":
       echo "Bajaj";
       break;
   case "roda 4":
       echo "Mobil, ATV";
       break;
   default:
       echo "Kendaraan Belum Diciptakan";
}
?>

<html>
   <body>
       <div class="Nomor5">
           <?php include 'Nomor5.php'; ?>
       </div>
   </body>
</html>
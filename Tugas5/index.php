<?php
    echo "<div style='border: 1px solid black; padding: 10px; width: 680px; margin: auto; font-family: Arial;'>";

    echo "<h1>Perhitungan Total Pembelian (Dengan Array)</h1>";
    echo "<hr>";

    $Elektronik = ["Keyboard", "Mouse", "Monitor"];
    $Harga = array(
        "keyboard" => 150000,
        "mouse" => 100000,
        "monitor" => 3000000
    );
    echo "Nama Barang: ". $Elektronik[0]. "<br>";  
    echo "Harga Satuan: ". $Harga["keyboard"]. "<br>";

    $Jumlah = 2;
    echo "Jumlah Beli: ". $Jumlah. "<br>";

    echo "Total Harga (Sebelum Pajak): ". $Harga["keyboard"] * $Jumlah. "<br>";
    echo "Pajak (10%): ". $Harga["keyboard"] * $Jumlah * 0.1. "<br>";
    echo "<b>" ."Total Bayar: ". $Harga["keyboard"] * $Jumlah * 1.1. "<br>" . "</b>";
?>
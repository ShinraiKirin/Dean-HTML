<?php
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    if ($nilai >=85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75 && $nilai <=84) {
        $predikat = "B";
    } elseif ($nilai >= 65 && $nilai <=74) {
        $predikat = "C";
    } elseif ($nilai >= 50 && $nilai <=64) {
        $predikat = "D";
    } elseif ($nilai >= 0 && $nilai <=49) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    if ($nilai >= 65 && $nilai <= 100) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    echo "Nama : " . htmlspecialchars($nama) . "<br>";
    echo "Nilai : " . htmlspecialchars($nilai) . "<br>";
    echo "Predikat : " . $predikat . "<br>";
    echo "Status : " . $status . "<br>";

?>
<?php
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $bayar = $_POST['ukt'];
    $diskon = 0;

    if ($bayar >= 5000000) {
        $diskon = 10;
    }

    if ($bayar >= 5000000 && $semester > 8) {
        $diskon = 15;
    }

    $biaya_ukt = $bayar - ($bayar * $diskon) / 100;

    echo "NPM : ". htmlspecialchars($npm) ."<br>";
    echo "Nama : " . htmlspecialchars($nama) . "<br>";
    echo "Prodi : ". htmlspecialchars($prodi) ."<br>";
    echo "Semester : ". htmlspecialchars($semester) ."<br>";
    echo "Biaya UKT : Rp. " . $bayar . "<br>";
    echo "Diskon : " . $diskon . "%<br>";
    echo "Yang Harus Dibayar : Rp. " . $biaya_ukt . "<br>";?>
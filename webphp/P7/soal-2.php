<?php
    $jumlahUang = 1575250; // variabel jumlahUang yang berisi total uang sebesar Rp 1.575.250

    $a = intval($jumlahUang / 100000); // menghitung berapa lembar uang Rp 100.000 dari total uang
    $sisa = $jumlahUang % 100000; // menghitung sisa uang setelah diambil pecahan Rp 100.000

    $b = intval($sisa / 50000); // menghitung berapa lembar uang Rp 50.000 dari sisa uang
    $sisa = $sisa % 50000; // menghitung sisa uang setelah diambil pecahan Rp 50.000    

    $c = intval($sisa / 20000); // menghitung berapa lembar uang Rp 20.000 dari sisa uang
    $sisa = $sisa % 20000; // menghitung sisa uang setelah diambil pecahan Rp 20.000

    $d = intval($sisa / 5000); // menghitung berapa lembar uang Rp 5.000 dari sisa uang
    $sisa = $sisa % 5000; // menghitung sisa uang setelah diambil pecahan Rp 5.000

    $e = intval($sisa / 100); // menghitung berapa keping uang Rp 100 dari sisa uang
    $sisa = $sisa % 100; // menghitung sisa uang setelah diambil pecahan Rp 100

    $f = intval($sisa / 50); // menghitung berapa keping uang Rp 50 dari sisa uang
    $sisa = $sisa % 50; // menghitung sisa uang setelah diambil pecahan Rp 50

    echo "Jumlah Rp. 100.000 : ".$a."<br />"; // menampilkan jumlah lembar uang Rp 100.000
    echo "Jumlah Rp. 50.000 : ".$b."<br />"; // menampilkan jumlah lembar uang Rp 50.000
    echo "Jumlah Rp. 20.000 : ".$c."<br />"; // menampilkan jumlah lembar uang Rp 20.000
    echo "Jumlah Rp. 5.000 : ".$d."<br />"; // menampilkan jumlah lembar uang Rp 5.000
    echo "Jumlah Rp. 100 : ".$e."<br />"; // menampilkan jumlah keping uang Rp 100
    echo "Jumlah Rp. 50 : ".$f."<br />"; // menampilkan jumlah keping uang Rp 50
?> 
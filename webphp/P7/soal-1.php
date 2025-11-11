    <?php
        $saldoAwal = 1000000; // variabel saldo awal yang berisi 1.000.000
        $bunga = 0.0025; // variabel bunga yang berisi 0.0025 atau 0,25%
        $bulan = 11; // variabel bulan yang berisi 11 yang menandakan 11 bulan
        $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan); // saldo akhir dihitung dengan menambahkan saldo awal dengan hasil dari (saldo awal × bunga × bulan)
        echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir.".-"; // akan menampilkan saldo akhir setelah 11 bulan dan saldo akhir nya itu berapa
    ?>

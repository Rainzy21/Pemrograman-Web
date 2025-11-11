<?php
$saldoAwal = '';
$bunga_persen = '';
$bulan = '';
$hasil = ''; // 

if (isset($_POST['submit'])) {

    $saldoAwal = (float) $_POST['saldo_awal'];
    $bunga_persen = (float) $_POST['bunga'];
    $bulan = (int) $_POST['bulan'];

    $bunga_desimal = $bunga_persen / 100;

    $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga_desimal * $bulan);

    $hasil = "Saldo akhir setelah " . $bulan . " bulan adalah : <strong>Rp. " . number_format($saldoAkhir, 0, ',', '.') . ",-</strong>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bunga Bank</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box; 
        }
        input[type="submit"], input[type="reset"] {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
        }
        input[type="reset"] {
            background-color: #dc3545;
            color: white;
            margin-left: 10px;
        }
        #hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #e6f7ff;
            border-left: 5px solid #007bff;
            font-size: 1.1em;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Kalkulator Saldo Akhir</h2>
        <p>Berdasarkan Soal 1 Pertemuan Sebelumnya</p>

        <form action="" method="post">
            <div>
                <label for="saldo_awal">Saldo Awal (Rp):</label>
                <input type="number" id="saldo_awal" name="saldo_awal" value="<?php echo htmlspecialchars($saldoAwal); ?>" placeholder="Contoh: 1000000" required>
            </div>
            
            <div>
                <label for="bunga">Besar Bunga per Bulan (%):</label>
                <input type="number" id="bunga" name="bunga" step="0.01" value="<?php echo htmlspecialchars($bunga_persen); ?>" placeholder="Contoh: 0.25" required>
            </div>
            
            <div>
                <label for="bulan">Lama Bulan:</label>
                <input type="number" id="bulan" name="bulan" value="<?php echo htmlspecialchars($bulan); ?>" placeholder="Contoh: 11" required>
            </div>
            
            <div>
                <input type="submit" name="submit" value="Hitung">
                <input type="reset" value="Reset">
            </div>
        </form>

        <?php if ($hasil != ''): ?>
            <div id="hasil">
                <?php echo $hasil; ?>
            </div>
        <?php endif; ?>

    </div>

</body>
</html>
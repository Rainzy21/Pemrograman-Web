<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1: Kalkulator Saldo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-weight: 600;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box; 
            transition: border-color 0.3s;
        }
        input[type="number"]:focus {
            border-color: #007bff;
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result-box {
            margin-top: 25px;
            padding: 20px;
            background-color: #e8f5e9; 
            border-left: 5px solid #28a745;
            border-radius: 4px;
            color: #2c3e50;
        }
        .result-item {
            margin-bottom: 8px;
            font-size: 14px;
        }
        .total {
            font-size: 18px;
            font-weight: bold;
            color: #1e7e34;
            margin-top: 15px;
            padding-top: 10px;
            border-top: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator Bunga Bank</h2>
    
    <form method="post" action="">
        <div class="form-group">
            <label for="saldo">Saldo Awal (Rp)</label>
            <input type="number" id="saldo" name="saldo_awal" placeholder="Contoh: 1000000" required>
        </div>
        
        <div class="form-group">
            <label for="bulan">Jangka Waktu (Bulan)</label>
            <input type="number" id="bulan" name="bulan" placeholder="Contoh: 12" required>
        </div>
        
        <input type="submit" name="submit" value="Hitung Saldo Akhir">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $saldo = $_POST['saldo_awal'];
        $jangka_waktu = $_POST['bulan'];
        $biaya_admin = 9000;

        // Tampilkan info awal
        echo "<div class='result-box'>";
        echo "<div class='result-item'>💰 Saldo Awal: <b>Rp " . number_format($saldo, 0, ',', '.') . "</b></div>";
        echo "<div class='result-item'>📅 Lama Menabung: <b>$jangka_waktu Bulan</b></div>";
        echo "<div class='result-item'>🧾 Biaya Admin: <b>Rp 9.000 / bulan</b></div>";

        // Proses Hitung
        for ($i = 1; $i <= $jangka_waktu; $i++) {
            if ($saldo < 1100000) {
                $bunga = $saldo * (0.03 / 12); 
            } else {
                $bunga = $saldo * (0.04 / 12); 
            }
            $saldo = $saldo + $bunga - $biaya_admin;
        }

        echo "<div class='total'>Saldo Akhir: Rp " . number_format($saldo, 2, ',', '.') . "</div>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
<?php

$jumlahUang_input = '';
$hasil_output = ''; 


if (isset($_POST['submit'])) {

    $jumlahUang = (int) $_POST['jumlah_uang'];
    $jumlahUang_input = $jumlahUang; 

    $a = intval($jumlahUang / 100000); 
    $sisa = $jumlahUang % 100000;

    $b = intval($sisa / 50000); 
    $sisa = $sisa % 50000;

    $c = intval($sisa / 20000); 
    $sisa = $sisa % 20000;

    $d = intval($sisa / 5000); 
    $sisa = $sisa % 5000;

    $e = intval($sisa / 100); 
    $sisa = $sisa % 100;

    $f = intval($sisa / 50); 
    $sisa_akhir = $sisa % 50; 

    $hasil_output = "<h3>Rincian Pecahan untuk Rp. " . number_format($jumlahUang) . ",-</h3>";
    $hasil_output .= "Jumlah Rp. 100.000 : <b>" . $a . "</b> lembar<br />";
    $hasil_output .= "Jumlah Rp. 50.000 : <b>" . $b . "</b> lembar<br />";
    $hasil_output .= "Jumlah Rp. 20.000 : <b>" . $c . "</b> lembar<br />";
    $hasil_output .= "Jumlah Rp. 5.000 : <b>" . $d . "</b> lembar<br />";
    $hasil_output .= "Jumlah Rp. 100 : <b>" . $e . "</b> keping<br />";
    $hasil_output .= "Jumlah Rp. 50 : <b>" . $f . "</b> keping<br />";

    if ($sisa_akhir > 0) {
        $hasil_output .= "<br />Sisa uang tidak terhitung: <b>Rp. " . $sisa_akhir . ",-</b>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pecahan Uang</title>
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
            background-color: #007bff; 
            color: white;
        }
        input[type="reset"] {
            background-color: #6c757d; 
            color: white;
            margin-left: 10px;
        }
        #hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #e6f7ff;
            border-left: 5px solid #007bff;
            line-height: 1.6; 
        }
        h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Kalkulator Pecahan Uang</h2>
        <p>Berdasarkan Soal 2 Pertemuan Sebelumnya</p>

        <form action="" method="post">
            <div>
                <label for="jumlah_uang">Masukkan Jumlah Uang (Rp):</label>
                <input type="number" id="jumlah_uang" name="jumlah_uang" value="<?php echo htmlspecialchars($jumlahUang_input); ?>" placeholder="Contoh: 1575250" required>
            </div>
            
            <div>
                <input type="submit" name="submit" value="Hitung Pecahan">
                <input type="reset" value="Reset">
            </div>
        </form>

        <?php if ($hasil_output != ''): ?>
            <div id="hasil">
                <?php echo $hasil_output; ?>
            </div>
        <?php endif; ?>

    </div>

</body>
</html>
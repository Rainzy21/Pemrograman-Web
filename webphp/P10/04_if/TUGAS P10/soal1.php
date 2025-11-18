<?php
// Inisialisasi variabel untuk menampung pesan hasil
$pesan = "";

// 1. Cek apakah form sudah disubmit (user menekan tombol "Cek")
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. Ambil data tahun yang dikirim dari form
    $tahun = $_POST['tahun'];

    // Variabel untuk menampung hasil pengecekan
    $adalahKabisat = false;

    // 3. Logika untuk menentukan tahun kabisat
    // Aturan:
    // - Jika tahun habis dibagi 400, MAKA kabisat.
    // - ATAU JIKA tahun habis dibagi 4 TAPI TIDAK habis dibagi 100, MAKA kabisat.
    // - Selain itu, BUKAN kabisat.
    
    if (($tahun % 400 == 0) || (($tahun % 4 == 0) && ($tahun % 100 != 0))) {
        $adalahKabisat = true;
    }

    // 4. Siapkan pesan untuk ditampilkan
    if ($adalahKabisat) {
        // Gunakan <strong> untuk menebalkan teks
        $pesan = "Tahun <strong>$tahun</strong> adalah <strong>Tahun Kabisat</strong>.";
    } else {
        $pesan = "Tahun <strong>$tahun</strong> BUKAN Tahun Kabisat.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Tahun Kabisat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"] {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .hasil {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
            font-size: 1.1em;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Pengecekan Tahun Kabisat</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="tahun">Masukkan Tahun:</label>
            <input type="number" id="tahun" name="tahun" placeholder="Contoh: 2024" required>
            
            <input type="submit" value="Cek">
        </form>

        <?php
        // 5. Tampilkan pesan hasil HANYA JIKA $pesan tidak kosong (artinya form sudah disubmit)
        if (!empty($pesan)) {
            echo "<div class='hasil'>$pesan</div>";
        }
        ?>
    </div>

</body>
</html>
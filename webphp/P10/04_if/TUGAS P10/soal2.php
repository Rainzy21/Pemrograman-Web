<?php
// Inisialisasi variabel untuk menampung pesan dan hasil
$pesan_hasil = "";

// Definisikan tarif dan batas jam
$tarif_normal = 2000;
$tarif_lembur = 3000;
$batas_jam_normal = 48;

// 1. Cek apakah form sudah disubmit (method-nya "POST")
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Ambil data jam kerja dari form dan pastikan itu angka (integer)
    $jam_kerja = (int)$_POST['jam_kerja'];

    // Inisialisasi variabel untuk perhitungan
    $upah_normal = 0;
    $upah_lembur = 0;
    $total_gaji = 0;

    // 3. Logika perhitungan gaji
    if ($jam_kerja <= $batas_jam_normal) {
        // KASUS 1: Jam kerja normal (tidak ada lembur)
        $upah_normal = $jam_kerja * $tarif_normal;
        $total_gaji = $upah_normal;

        // Siapkan pesan hasil
        $gaji_terformat = "Rp " . number_format($total_gaji, 0, ',', '.');
        $pesan_hasil = "Jam kerja: <strong>$jam_kerja jam</strong> (Tidak ada lembur)<br>";
        $pesan_hasil .= "Perhitungan: $jam_kerja jam × Rp 2.000<br>";
        $pesan_hasil .= "<strong>Total Upah: $gaji_terformat</strong>";

    } else {
        // KASUS 2: Ada jam lembur
        $jam_normal = $batas_jam_normal;
        $jam_lembur = $jam_kerja - $batas_jam_normal;

        // Hitung masing-masing upah
        $upah_normal = $jam_normal * $tarif_normal;
        $upah_lembur = $jam_lembur * $tarif_lembur;
        $total_gaji = $upah_normal + $upah_lembur;

        // Format angka agar mudah dibaca (misal: 100.000)
        $gaji_terformat = "Rp " . number_format($total_gaji, 0, ',', '.');
        $upah_normal_terformat = "Rp " . number_format($upah_normal, 0, ',', '.');
        $upah_lembur_terformat = "Rp " . number_format($upah_lembur, 0, ',', '.');

        // Siapkan pesan hasil yang lebih rinci
        $pesan_hasil = "Total Jam Kerja: <strong>$jam_kerja jam</strong><br><br>";
        $pesan_hasil .= "<u>Rincian Perhitungan:</u><br>";
        $pesan_hasil .= "Upah Normal: $jam_normal jam × Rp 2.000 = $upah_normal_terformat<br>";
        $pesan_hasil .= "Upah Lembur: $jam_lembur jam × Rp 3.000 = $upah_lembur_terformat<br>";
        $pesan_hasil .= "<strong>Total Upah: $upah_normal_terformat + $upah_lembur_terformat = $gaji_terformat</strong>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 500px;
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
            font-size: 1em;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1.1em;
            line-height: 1.5; /* Agar rincian lebih mudah dibaca */
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Hitung Upah Karyawan</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="jam_kerja">Masukkan Jumlah Jam Kerja Seminggu:</label>
            
            <input type="number" id="jam_kerja" name="jam_kerja" min="0" placeholder="Contoh: 50" required>
            
            <input type="submit" value="Hitung Upah">
        </form>

        <?php
        // 4. Tampilkan pesan hasil HANYA JIKA $pesan_hasil tidak kosong
        if (!empty($pesan_hasil)) {
            echo "<div class='hasil'>$pesan_hasil</div>";
        }
        ?>
    </div>

</body>
</html>
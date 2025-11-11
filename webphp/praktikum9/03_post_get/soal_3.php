<?php

$hasil_output = '';

if (isset($_POST['submit'])) {

    $nama = htmlspecialchars($_POST['nama_lengkap']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    
    
    $tgl = $_POST['tanggal'];
    $bln = $_POST['bulan'];
    $thn = $_POST['tahun'];
    $tanggal_lahir = "$tgl-$bln-$thn"; 

    $alamat = nl2br(htmlspecialchars($_POST['alamat']));
    
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? htmlspecialchars($_POST['jenis_kelamin']) : '[Tidak diisi]';
    
    $asal_sekolah = htmlspecialchars($_POST['asal_sekolah']);
    $nilai_uan = htmlspecialchars($_POST['nilai_uan']);

    $hasil_output = "Terimakasih <b>" . $nama . "</b> sudah mengisi form pendaftaran." .
                    "<br><br>" .
                    "Nama Lengkap : " . $nama . "<br>" .
                    "Tempat Lahir : " . $tempat_lahir . "<br>" .
                    "Tanggal Lahir : " . $tanggal_lahir . "<br>" .
                    "Alamat Rumah : " . $alamat . "<br>" .
                    "Jenis Kelamin : " . $jenis_kelamin . "<br>" .
                    "Asal Sekolah : " . $asal_sekolah . "<br>" .
                    "Nilai UAN : " . $nilai_uan;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        form div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"], textarea, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box; 
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea { min-height: 80px; resize: vertical; }
        .radio-group label { font-weight: normal; display: inline-block; margin-right: 15px; }
        input[type="radio"] { margin-right: 5px; }
        input[type="submit"], input[type="reset"] {
            padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;
        }
        input[type="submit"] { background-color: #007bff; color: white; }
        input[type="reset"] { background-color: #6c757d; color: white; margin-left: 10px; }
        #hasil {
            margin-top: 20px; padding: 15px; background-color: #e6f7ff;
            border-left: 5px solid #007bff; line-height: 1.6;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Pendaftaran Online Mahasiswa Baru</h2>
        <p>Universitas X</p>

        <form action="" method="post">
            <div>
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            
            <div>
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>
            </div>

            <div>
                <label>Tanggal Lahir:</label>
                <div style="display: flex; gap: 10px;">
                    <select name="tanggal" required style="flex: 1;">
                        <option value="">Tanggal</option>
                        <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    
                    <select name="bulan" required style="flex: 2;">
                        <option value="">Bulan</option>
                        <?php
                            $bulan = [
                                1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                                5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                                9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                            ];
                            foreach ($bulan as $angka => $nama) {
                                echo "<option value='$angka'>$nama</option>";
                            }
                        ?>
                    </select>

                    <select name="tahun" required style="flex: 1;">
                        <option value="">Tahun</option>
                        <?php
                            for ($i = 2005; $i >= 1980; $i--) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div>
                <label for="alamat">Alamat Rumah:</label>
                <textarea id="alamat" name="alamat" required></textarea>
            </div>

            <div class="radio-group">
                <label>Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="Pria" required> Pria</label>
                <label><input type="radio" name="jenis_kelamin" value="Wanita"> Wanita</label>
            </div>

            <div>
                <label for="asal_sekolah">Asal Sekolah:</label>
                <input type="text" id="asal_sekolah" name="asal_sekolah" required>
            </div>

            <div>
                <label for="nilai_uan">Nilai UAN (Contoh: 85.5):</label>
                <input type="number" id="nilai_uan" name="nilai_uan" step="0.01" required>
            </div>

            <div>
                <input type="submit" name="submit" value="Daftar">
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
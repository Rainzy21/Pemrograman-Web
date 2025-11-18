<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Upah Karyawan</title>
    <style>
        /* CSS Sederhana untuk Tampilan */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box; /* Agar padding tidak menambah lebar */
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        #hasil {
            margin-top: 20px;
            text-align: center;
        }
        #totalUpah {
            font-size: 1.5em;
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Kalkulator Upah Karyawan</h2>
        
        <form id="formGaji">
            <div>
                <label for="golongan">Pilih Golongan:</label>
                <select id="golongan" name="golongan">
                    <option value="A">Golongan A (Rp. 4.000/jam)</option>
                    <option value="B">Golongan B (Rp. 5.000/jam)</option>
                    <option value="C">Golongan C (Rp. 6.000/jam)</option>
                    <option value="D">Golongan D (Rp. 7.500/jam)</option>
                </select>
            </div>
            <div>
                <label for="jamKerja">Jumlah Jam Kerja Seminggu:</label>
                <input type="number" id="jamKerja" name="jamKerja" required min="0" placeholder="Contoh: 45">
            </div>
            <button type="submit">Hitung Upah</button>
        </form>
        
        <div id="hasil">
            <h3>Total Upah Anda:</h3>
            <p id="totalUpah">-</p>
        </div>
    </div>

    <script>
        // Logika Perhitungan (JavaScript)
        document.getElementById('formGaji').addEventListener('submit', function(event) {
            // Mencegah form dari reload halaman
            event.preventDefault(); 
            
            // 1. Ambil Nilai dari Form
            const golongan = document.getElementById('golongan').value;
            const totalJam = parseInt(document.getElementById('jamKerja').value);
            
            // 2. Definisikan Konstanta
            const jamNormal = 40; // Asumsi jam kerja normal 40 jam
            const tarifLembur = 3000;
            let tarifPerJam = 0;
            
            // 3. Tentukan Tarif per Jam berdasarkan Golongan
            switch (golongan) {
                case 'A':
                    tarifPerJam = 4000;
                    break;
                case 'B':
                    tarifPerJam = 5000;
                    break;
                case 'C':
                    tarifPerJam = 6000;
                    break;
                case 'D':
                    tarifPerJam = 7500;
                    break;
            }
            
            // 4. Hitung Jam Reguler dan Jam Lembur
            let jamReguler = 0;
            let jamLembur = 0;
            
            if (totalJam > jamNormal) {
                jamReguler = jamNormal;
                jamLembur = totalJam - jamNormal;
            } else {
                jamReguler = totalJam;
                jamLembur = 0; // Tidak ada lembur
            }
            
            // 5. Hitung Total Upah
            const upahReguler = jamReguler * tarifPerJam;
            const upahLembur = jamLembur * tarifLembur;
            const totalUpah = upahReguler + upahLembur;
            
            // 6. Tampilkan Hasil
            const outputElement = document.getElementById('totalUpah');
            // Format sebagai mata uang Rupiah (IDR)
            outputElement.textContent = `Rp ${totalUpah.toLocaleString('id-ID')},-`;
        });
    </script>

</body>
</html>
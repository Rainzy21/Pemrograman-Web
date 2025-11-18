<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah Hari dalam Bulan</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 20px; 
            background-color: #f9f9f9;
        }
        .container {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 500px;
        }
        h2 {
            color: #333;
        }
        #hasil {
            font-size: 1.2em;
            color: #0056b3;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>📜 Info Bulan Saat Ini</h2>
        
        <p id="hasil">Sedang menghitung...</p>
    </div>

    <script>
        
        const tanggalHariIni = new Date();
        
        
        const bulanIndex = tanggalHariIni.getMonth(); 
        const tahun = tanggalHariIni.getFullYear();
        
        // Array untuk mengubah index (0-11) menjadi nama bulan
        const namaBulanArray = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        
        const namaBulan = namaBulanArray[bulanIndex];
        let jumlahHari;

        switch (bulanIndex) {
            // Bulan dengan 31 hari
            case 0: 
            case 2: 
            case 4: 
            case 6: 
            case 7: 
            case 9: 
            case 11: 
                jumlahHari = 31;
                break;
            
            // Bulan dengan 30 hari
            case 3: 
            case 5: 
            case 8: 
            case 10: 
                jumlahHari = 30;
                break;
                
            // Kasus khusus: Februari
            case 1: 
                if ((tahun % 4 === 0 && tahun % 100 !== 0) || (tahun % 400 === 0)) {
                    jumlahHari = 29; // Tahun Kabisat
                } else {
                    jumlahHari = 28; // Bukan Tahun Kabisat
                }
                break;
        }

        
        const elemenHasil = document.getElementById('hasil');
        elemenHasil.textContent = `Bulan saat ini adalah ${namaBulan} ${tahun}. Jumlah hari di bulan ini adalah ${jumlahHari} hari.`;

    </script>

</body>
</html>
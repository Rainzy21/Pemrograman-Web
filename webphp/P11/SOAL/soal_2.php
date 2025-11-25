<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2: Persamaan Matematika</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            padding-top: 50px;
            margin: 0;
        }
        .container {
            background-color: #fff;
            width: 80%;
            max-width: 800px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }
        h2 { color: #4a4a4a; margin-bottom: 10px; }
        p { color: #666; margin-bottom: 30px; }
        
        .table-container {
            max-height: 400px; 
            overflow-y: auto;  
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: #007bff;
            color: white;
            padding: 12px;
            position: sticky;
            top: 0; 
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #eee;
            color: #333;
        }
        tr:nth-child(even) { background-color: #f9f9f9; }
        tr:hover { background-color: #f1f1f1; }

        .summary {
            background-color: #333;
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Penyelesaian Persamaan</h2>
    <p>Mencari kombinasi bilangan asli untuk <b>x + y + z = 25</b></p>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nilai X</th>
                    <th>Nilai Y</th>
                    <th>Nilai Z</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $jumlah_penyelesaian = 0;
                $target = 25;
                $no = 1;

                // Nested Loop 3 Tingkat
                for ($x = 1; $x <= $target; $x++) {
                    for ($y = 1; $y <= $target; $y++) {
                        for ($z = 1; $z <= $target; $z++) {
                            
                            if (($x + $y + $z) == $target) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>$x</td>";
                                echo "<td>$y</td>";
                                echo "<td>$z</td>";
                                echo "<td><strong>25</strong></td>";
                                echo "</tr>";
                                $jumlah_penyelesaian++;
                            }
                            
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="summary">
        Total Ditemukan: <?php echo $jumlah_penyelesaian; ?> Pasangan
    </div>
</div>

</body>
</html>
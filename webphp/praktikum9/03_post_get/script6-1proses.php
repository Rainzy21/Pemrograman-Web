<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Baca input dari form</title>
    </head>
    <body>
        <h1>Baca input dari form</h1>

        <p>Berikut ini data yang telah Anda masukkan dalam form</p>

        <?php
        $namaAnda = $_POST['nama'] ?? '';
        $alamatAnda = $_POST['alamat'] ?? '';
        $sexAnda = $_POST['sex'] ?? '';
        $jobAnda = $_POST['job'] ?? '';
        $statusMenikah = isset($_POST['status']) ? 'Menikah' : 'Belum Menikah';

        echo "<table>\n";
        echo "    <tr><td>Nama Anda</td><td>:</td><td>" . htmlspecialchars($namaAnda, ENT_QUOTES, 'UTF-8') . "</td></tr>\n";
        echo "    <tr><td>Alamat Anda</td><td>:</td><td>" . nl2br(htmlspecialchars($alamatAnda, ENT_QUOTES, 'UTF-8')) . "</td></tr>\n";
        echo "    <tr><td>Jenis Kelamin Anda</td><td>:</td><td>" . htmlspecialchars($sexAnda, ENT_QUOTES, 'UTF-8') . "</td></tr>\n";
        echo "    <tr><td>Pekerjaan Anda</td><td>:</td><td>" . htmlspecialchars($jobAnda, ENT_QUOTES, 'UTF-8') . "</td></tr>\n";
        echo "    <tr><td>Status Menikah</td><td>:</td><td>" . htmlspecialchars($statusMenikah, ENT_QUOTES, 'UTF-8') . "</td></tr>\n";
        echo "</table>\n";
        ?>

    </body>
</html>
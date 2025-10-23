<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
</head>
<body>
    <h2>Latihan 1 - Form POST</h2>
    <form method="post" action="">
        <label>Nama :</label>
        <input type="text" name="nama" required>
        <br><br>

        <label>Tanggal Lahir :</label>
        <input type="date" name="tgl" required>
        <br><br>

        <label>Pekerjaan :</label>
        <select name="pekerjaan">
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Programmer">Programmer</option>
            <option value="Designer">Designer</option>
        </select>
        <br><br>

        <input type="submit" value="Kirim">
    </form>

    <hr>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tgl'];
            $pekerjaan = $_POST['pekerjaan'];

            // Menghitung umur
            $lahir = new DateTime($tanggal_lahir);
            $sekarang = new DateTime();
            $umur = $sekarang->diff($lahir)->y;

            echo "<h3>Hasil Data:</h3>";
            echo "Nama: $nama<br>";
            echo "Tanggal Lahir: $tanggal_lahir<br>";
            echo "Pekerjaan: $pekerjaan<br>";
            echo "Usia: $umur tahun<br>";
        }
    ?>
</body>
</html>

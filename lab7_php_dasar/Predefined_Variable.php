<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <hr>
    <h2>Predefined Variable (GET)</h2>
    <form method="get" action="">
        <label>Masukkan Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
        // Mengecek apakah variabel GET "nama" sudah dikirim
        if (isset($_GET['nama'])) {
            echo "<h3>Selamat Datang " . $_GET['nama'] . "</h3>";
        }
    ?>
</body>
</html>





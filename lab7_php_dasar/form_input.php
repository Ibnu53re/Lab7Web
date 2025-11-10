<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            echo "<h3>Selamat Datang, $nama!</h3>";
        }
    ?>
</body>
</html>





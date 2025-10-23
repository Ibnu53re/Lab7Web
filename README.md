# Lab7Web

# Nama: Ibnu Nazhif Alamsyah
# NIM:  312410094

# Tugas

<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/d81797a7-bfa5-45eb-b326-b241372523b5" />

**Code**
```
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

```

# PHP Dasar
<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/bd727deb-2dfa-4e6b-a86f-f98644582c38" />
<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/2aa97419-f6d9-459f-a155-1298da6aa708" />

# Variable
<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/7c71cb71-ca97-4350-9e62-4069e1ea4cf8" />

# Predefine Variable 
<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/f6328861-9f18-402b-ad71-daa9e8ab4d61" />

# Form Input
<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/53c0729d-e99e-4194-9cd2-c661d7d63d74" />

# Operator
<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/bce21f8e-9a60-413d-9d68-48d3ed3eba28" />

# Kondisi
<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/c1471771-e05f-43bb-bde9-e931d830b0c8" />

# Perulangan
<img width="1366" height="728" alt="Image" src="https://github.com/user-attachments/assets/dbd49008-72b4-4a25-b4fd-b2d4b626bb6f" />

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kondisi PHP</title>
</head>
<body>
    <h2>Kondisi IF</h2>
    <?php
        $nama_hari = date("l");

        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } elseif ($nama_hari == "Tuesday") {
            echo "Selasa";
        } else {
            echo "Hari ini bukan Minggu, Senin, atau Selasa";
        }
    ?>

    <hr>
    <h2>Kondisi Switch</h2>
    <?php
        $day = date("D");
        switch ($day) {
            case "Sun": echo "Minggu"; break;
            case "Mon": echo "Senin"; break;
            case "Tue": echo "Selasa"; break;
            case "Wed": echo "Rabu"; break;
            case "Thu": echo "Kamis"; break;
            case "Fri": echo "Jumat"; break;
            case "Sat": echo "Sabtu"; break;
            default: echo "Tidak diketahui";
        }
    ?>
</body>
</html>




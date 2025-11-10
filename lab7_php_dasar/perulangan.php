<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan PHP</title>
</head>
<body>
    <h2>Perulangan FOR</h2>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Perulangan ke-$i <br>";
        }
    ?>

    <hr>
    <h2>Perulangan WHILE</h2>
    <?php
        $i = 1;
        while ($i <= 10) {
            echo "Perulangan ke-$i <br>";
            $i++;
        }
    ?>

    <hr>
    <h2>Perulangan DO WHILE</h2>
    <?php
        $i = 1;
        do {
            echo "Perulangan ke-$i <br>";
            $i++;
        } while ($i <= 10);
    ?>
</body>
</html>






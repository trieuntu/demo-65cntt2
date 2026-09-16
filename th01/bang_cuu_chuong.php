<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bang cuu chuong</title>
</head>
<body>
    <?php
    echo "<h1>Bảng cửu chương</h1>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<h2>Bảng cửu chương $i</h2>";
        echo "<ul>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "<li>$i x $j = $result</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
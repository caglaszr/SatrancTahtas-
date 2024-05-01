<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satranç Tahtası</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
        .black {
            background-color: #000;
        }
        .white {
            background-color: #fff;
        }
        .label {
            font-weight: bold;
            border: none;
        }
        .outer {
            border: 2px solid #000;
        }
        .inner {
            border: 1px solid #000;
        }
    </style>
</head>
<body>
<table class="outer">
    <?php
    $letters = range('A', 'H');
    $numbers = range(8, 1);
    echo "<tr>";
    echo "<td class='label'></td>";
    foreach ($letters as $letter) {
        echo "<td class='label'>$letter</td>";
    }
    echo "<td class='label'></td>";
    echo "</tr>";
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        echo "<td class='label'>$numbers[$i]</td>";
        for ($j = 0; $j < 8; $j++) {
            $color = ($i + $j) % 2 == 0 ? 'white' : 'black';
            echo "<td class='inner $color'></td>";
        }
        echo "<td class='label'>$numbers[$i]</td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td class='label'></td>";
    foreach ($letters as $letter) {
        echo "<td class='label'>$letter</td>";
    }
    echo "<td class='label'></td>";
    echo "</tr>";
    ?>
</table>

</body>
</html>

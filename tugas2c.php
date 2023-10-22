<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 3</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            margin: 5px;
            float :left;
            text-align : center;
            line-height: 50px
        }
        .clear {
            clear: both;
        }
        .ganjil {
        background-color: #003; 
        color: #fff; 
        }
        .genap {
        background-color: #999;
        }
    </style>
</head>
<body>
    <?php
        $rows = 5;
        $coloum = 5;
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $class = ($i % 2 == 0) ? 'genap' : 'ganjil';
                echo '<div class= "kotak ' .$class . '">' . $j . '</div>';              
            }

            echo '<div class ="clear"></div>' ;
        }
    ?>
</body>
</html>
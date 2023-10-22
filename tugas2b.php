<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Modul 2 - Latihan 2</title>
<style>

.kotak {
width: 50px;
height: 50px;
border: 2px solid black;
margin: 2px;
float :left;
text-align : center;
line-height: 50px
        }
        
.clear {
clear: both;
}

</style>
</head>
<body>
<?php
        $rows = 5;
        for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class= "kotak '.'">' . $j . '</div>';              
            }
            echo '<div class ="clear"></div>' ;
        }
            

    ?>

</body>
</html>
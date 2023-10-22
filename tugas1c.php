<!DOCTYPE html>
<html>
<head>
  <title>Latihan 1c</title>
  <style>
    .kotak {
      width: 100px;
      height: 100px;
      background-color: #ffffff;
      color: #000;
      font-size: 50px;
      text-align: center;
      border: 2px solid black;
      display: inline-block;
      flex-direction: column;
    }
  </style>
</head>
<body>
  <div class="kotak">
    <?php
      $huruf = array("A", "B", "C");
      echo $huruf[0];
    ?>
  </div>
    <br>
  <div class="kotak">
    <?php
      echo $huruf[0];
    ?>
  </div>

  <div class="kotak">
    <?php
      echo $huruf[1];
    ?>
  </div>
    <br>

  <div class="kotak">
    <?php
      echo $huruf[0];
    ?>
  </div>

  <div class="kotak">
    <?php
      echo $huruf[1];
    ?>
  </div>

  <div class="kotak">
    <?php
      echo $huruf[2];
    ?>
  </div>
</body>
</html>
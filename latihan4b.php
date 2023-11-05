<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN</title>
</head>
<body>
    <?php
    // Membuat array negara ASEAN awal
    $negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

    // Menampilkan daftar negara ASEAN awal dalam list HTML
    echo "<h3>Daftar Negara ASEAN awal:</h3>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";

    // Menambahkan 3 negara baru ke dalam array
    $negara_asean[] = "Laos";
    $negara_asean[] = "Filipina";
    $negara_asean[] = "Myanmar";

    // Menampilkan daftar negara ASEAN setelah penambahan
    echo "<h3>Daftar Negara ASEAN baru:</h3>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
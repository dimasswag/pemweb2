<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "Minyak Telon", 20, 30000,),
    array(2, "Diapers", 15, 51000),
    array(3, "Baby Oil", 10, 16000),
    array(4, "Shampo Baby", 18, 20000),
    array(5, "Bedak", 15, 15000),
    array(6, "Baju bayi", 20, 35500),
    array(7, "Jmuper", 25, 5000),
    
);


$totalJumlah = 0;

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3];
    $totalJumlah += $jumlah;
    $row[] = $jumlah;
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah;

$diskon = 0;


if ($totalJumlah >= 200000) {
    $diskon = 0.2; // Diskon 20%
} elseif ($totalJumlah >= 150000) {
    $diskon = 0.1; // Diskon 10%
}

if ($diskon > 0) {
    $totalDiskon = $totalJumlah * $diskon;
    $totalBayar = $totalJumlah - $totalDiskon;
    echo "<br>Discount: " . ($diskon * 100) . "%";
    echo "<br>Total yang harus dibayar setelah diskon: " . $totalBayar;
}
$produk = array(
    array(1, "Minyak Telon", 20, 30000,),
    array(2, "Diapers", 15, 51000),
    array(3, "Baby Oil", 10, 16000),
    array(4, "Shampo Baby", 18, 20000),
    array(5, "Bedak", 15, 15000),
    array(6, "Baju bayi", 20, 35500),
    array(7, "Jmuper", 25, 5000),
);

// Detail Transaksi
$tanggal = "06 November 2023";
$produk1 = "Baju Bayi (1X35.000)";
$produk2 = "Diapers (3X51.000)";
$produk3 = "Bedak (1X15.000)";
$produk4 = "Minyak Telon (2X30.000)";
$total_belanja = 1 * 35000 + 3 * 51000 + 1 * 15000 + 2 * 30000;

// Kalkulasi diskan dan pembayaran
if ($total_belanja >= 100000) {
    $diskon = 0.2 * $total_belanja;
} elseif ($total_belanja >= 50000) {
    $diskon = 0.1 * $total_belanja;
} else {
    $diskon = 0;
}
$total_pembayaran = $total_belanja - $diskon;
?>

<table>
    <tr>
        <td>Tanggal Transaksi</td>
        <td>:</td>
        <td><?php echo $tanggal; ?></td>
    </tr>
    <tr>
        <td>Produk</td>
        <td>:</td>
        <td><?php echo $produk1; ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><?php echo $produk2; ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><?php echo $produk3; ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><?php echo $produk4; ?></td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:</td>
        <td><?php echo $total_belanja; ?></td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td>:</td>
        <td><?php echo $diskon; ?></td>
    </tr>
    <tr>
        <td>Total Pembayaran</td>
        <td>:</td>
        <td><?php echo $total_pembayaran; ?></td>
    </tr>
</table>
<?php
include 'db.php';
$db_playstations = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../playstation/style.css">
</head>
<body>
    <div class="all">
    <div class="header">
        <h1>STORE</H1>
    </div>

    <div class="nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="data_barang.php">Menu Barang</a></li>
            <li><a href="data_pelanggan.php">Menu Pelanggan</a></li>
            <li><a href="data_transaksi.php">Data Pesanan</a></li>
        </ul>
    </div>
    <center>
        <div class="box">
    <h2 style="text-align: center; margin-bottom: 20px">Kasir</h2>
    <a href="tambahbarang.php" style="text-align: center; margin-top: 30px;  margin-bottom: 25px">Tambah Barang</a>
    <table border="1" cellspacing="0" cellpaadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
    <tr>
        <th>No</th>
        <th>Nama Lapangan</th>
        <th>Harga Lapangan</th>

    </tr>
    <?php
    $no=1;
    foreach($dbplaystations->tampilbarang() as $x ){
    ?>
    <tr>
        <td><?php echo $no ++?></td>
        <td><?php echo $x ['nama_barang'];?></td>
        <td><?php echo $x ['harga'];?></td>

    </tr>
  <?php
}?>
</table>
</center>
</div>
</body>
</html>
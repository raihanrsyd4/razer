<?php
require 'db.php';
$sql = "SELECT transaksi.id_transaksi, pelanggan.nama_pelanggan, barang.nama_barang, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran, pelanggan.id_pelanggan, barang.id_barang FROM pelanggan INNER JOIN transaksi ON pelanggan.id_pelanggan=transaksi.id_pelanggan INNER JOIN barang ON barang.id_barang=transaksi.id_barang";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
 <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
    <div class="head">
        <h1>Kasir Playstation</h1>
    </div>

    <div class="nav">
     <ul>
        <li><a href="home.php">Home</a><li>
        <li><a href="data_barang.php">Barang</a><li>
        <li><a href="data_pelanggan.php">Data Pelanggan</a><li>
        <li><a href="data_transaksi.php">Data Transaksi</a><li>
     </ul>
    </div>
    <center>
         <div class="box">
    <h2 style="text-align: center; margin-bottom: 20px">Dilarang LOLA</h2> 
    <a href="tambahtransaksi.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Transaksi</a>
    <table border="1" cellspacing="0" cellpaadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
     <tr>
        <tr>
            <th>Id Transaksi</th>
            <th>Pelanggan</th>
            <th>Nama Barang</th>
            <th>Kuantitas</th>
            <th>Harga</th>
            <th>Total Pembayaran</th>
            </tr>
    <?php while ($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $row['id_transaksi']?></td>
            <td><?= $row['nama_pelanggan']?></td>
            <td><?= $row['nama_barang']?></td>
            <td><?= $row['kuantitas']?></td>
            <td><?= $row['harga']?></td>
            <td><?= $row['total_pembayaran']?></td>
        </tr>
<?php endwhile ?>
</table>
</body>
</html>
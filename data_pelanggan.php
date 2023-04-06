<?php
require 'db.php';
$sql = "SELECT * FROM pelanggan";
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
    <a href="tambahpelanggan.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Pelanggan</a>
    <table border="1" cellspacing="0" cellpaadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
     <tr>
        <th>Id Pelanggan</th>
            <th>Nama pelanggan</th>
            <th>No Hp</th>
            <th>Alamat</th>
     </tr>
    <?php while ($row = mysqli_fetch_assoc($result)):?>
     <tr>
        <td><?= $row['id_pelanggan']?></td>
        <td><?= $row['nama_pelanggan']?></td>
        <td><?= $row['no_hp']?></td>
        <td><?= $row['alamat']?></td>
     </tr>
<?php endwhile ?>
</table>
</body>
</html>
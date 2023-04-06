<?php 
	include 'db.php';
	$db_playstations = new database;
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data Transaksi</title>
    <link rel="stylesheet" type="text/css" href="../playstation/style.css">
 </head>
 <body>
 	<div class="all">
 	<div class="head">
 		<h1>Transaksi</h1>
 	</div>

 	<div class="nav">
 		<ul>
			<li><a href="home.php">Home</a></li>
            <li><a href="data_barang.php">Data Barang</a></li>
            <li><a href="data_pelanggan.php">Data Pelanggan</a></li>
            <li><a href="data_transaksi.php">Data Transaksi</a></li>
	 	</ul>
 	</div>
    <div class="box">
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Transaksi</h2>
        <table border="1" cellspacing="0" cellpaadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
        <form action="proses.php?aksi=tambahtransaksi" method="post">
            <tr>
                <td>ID Pelanggan : </td>
                <td><input type="number" name="id_pelanggan"></td>
            </tr>
            <tr>
                <td>ID Barang : </td>
                <td><input type="number" name="id_barang"></td>
            </tr>
            <tr>
                <td>Kuantitas : </td>
                <td><input type="text" name="kuantitas"></td>
            </tr>
            <tr>
                <td>Harga : </td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Total Pembayaran : </td>
                <td><input type="text" name="total_pembayaran"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
    </div>
    </div>
 </body>
 </html>
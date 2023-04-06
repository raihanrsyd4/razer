<?php 
	include 'db.php';
	$db_playstations = new database;
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="../playstation/style.css">
 </head>
 <body>
 	<div class="all">
 	<div class="head">
 		<h1>Pelanggan</h1>
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
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Pelanggan</h2>
        <table border="1" cellspacing="0" cellpaadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
        <form action="proses.php?aksi=tambahpelanggan" method="post">
            <tr>
                <td>Nama Pelanggan : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>No HP : </td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="alamat"></td>
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
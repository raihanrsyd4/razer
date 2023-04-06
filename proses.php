<?php
include 'db.php';
$db_playstations= new database();

$aksi =$_GET['aksi'];
if($aksi == "tambahbarang"){
    $db_playstations->tambahbarang($_POST['nama_barang'], $_POST['harga']);
    header("location:data_barang.php");
}
if($aksi == "tambahpelanggan"){
    $db_playstations->tambahpelanggan($_POST['nama'], $_POST['no_hp'], $_POST['alamat']);
    header("location:data_pelanggan.php");
}
if($aksi == "tambahtransaksi"){
    $db_playstations->tambahtransaksi($_POST['id_pelanggan'], $_POST['id_barang'], $_POST['kuantitas'], $_POST['harga'], $_POST['total_pembayaran']);
    header("location:data_transaksi.php");
}
elseif($aksi == "hapuspesanan"){
    $db_playstations->hapuspesanan($_GET['id_pesanan']);
    header("location:kasir.php");
}
?>
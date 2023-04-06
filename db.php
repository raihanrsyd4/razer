<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_playstations";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("koneksi error;". mysqli.connect.error());
}
?>
  <?php
    class database{
        var $host = 'localhost';
        var $name = 'root';
        var $pw = '';
        var $db = 'db_playstations';
        

        function __construct(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_select_db($koneksi, $this->db);
        }
        // koneksi barang
        function tampilbarang(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM barang");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
            }   

        // koneksi tambah barang 
        function tambahbarang($nama_barang, $harga){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO barang VALUES('', '$nama_barang', '$harga')");
        }

        // koneksi pelanggan 
        function tampilpelanggan(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
        }
        return $hasil;
        }
        // koneksi tambah pelanggan
        function tambahpelanggan($nama, $no_hp, $alamat){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO pelanggan VALUES('', '$nama', '$no_hp', '$alamat')");
        }
        // koneksi transaksi 
        function tampiltaransaksi(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
        }
        return $hasil;
        }
        // koneksi tambah transaksi
        function tambahtransaksi($id_pelanggan, $id_barang, $kuantitas, $harga, $total_pembayaran){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO transaksi VALUES('', '$id_pelanggan', '$id_barang', '$kuantitas', '$harga', '$total_pembayaran')");
        }
    }
?>
<?php
include ('koneksi.php');


$kode= $_POST['kodebarang'];
$nama = $_POST['namabarang'];
$harga = $_POST['hargabarang'];
$satuan = $_POST['satuan'];
$kategoribar  = $_POST['kategori'];
$gambar = $_POST['urlbarang'];
$stok = $_POST['stockbarang'];

$result = $conn->exec("INSERT INTO `master` (`no`, `kode_barang`, `nama_barang`, `harga_barang`, `satuan`, `kategori`, `gambar`, `stok`) 
VALUES (NULL, '$kode', '$nama', '$harga', '$satuan', '$kategoribar', '$gambar', '$stok');");

echo $result;

if ($result==TRUE) {
    echo "Data Berhasil Disimpan";
    header("location:inventory.php");
}else {
    echo "Data Gagal Disimpan";
}
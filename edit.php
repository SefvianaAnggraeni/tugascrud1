
<?php

include('koneksi.php');

$pk = $_POST['no'];

$kodep = $_POST['kodebarang'];
$namap = $_POST['namabarang'];
$hargap = $_POST['hargabarang'];
$satuanp = $_POST['satuan'];
$kategorip = $_POST['kategori'];
$urlp = $_POST['urlbarang'];
$stokp = $_POST['stockbarang'];

$hasil =$conn-> query("UPDATE `master` SET `kode_barang` = '$kodep', `nama_barang` = '$namap', `harga_barang` = '$hargap', `satuan` = '$satuanp', `kategori` = '$kategorip', `gambar` = '$urlp', `stok` = '$stokp' WHERE `master`.`no` = $pk;");
if ($hasil == TRUE){
    echo " Data Berhasil diedit";
    header('location:inventory.php');
}else{
    echo "Data Gagal diedit";
}
?>
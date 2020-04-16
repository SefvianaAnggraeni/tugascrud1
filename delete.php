<?php
include('koneksi.php');

$key = $_GET['key'];
$result = $conn->exec("DELETE FROM `master` WHERE `master`.`no` = $key");

echo $result;
if ($result==TRUE) {
    echo "Data Berhasil Dihapus";
    header("location:inventory.php");
    # code...
}else {
    echo "Data Gagal Dihapus";
}
?>
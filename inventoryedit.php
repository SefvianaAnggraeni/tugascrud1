<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>  
    
<?php
    
    include('koneksi.php');

    $pk = $_GET['key'];
    $result = $conn->query("SELECT * FROM `master` WHERE no =$pk ");

    foreach ($result as $data) {


    ?>
    <div class="container" style="background-color: white;">
    <center>
    <form action="edit.php" method="post" class="form" style="border : 1px solid black;width: 20% : margin : 1% 30% 1% 30%">
        <h3 style="text-align: center;">Edit Barang</h3>
        <br>
        <table>
            <tr>
                <td style="font-size: 20px; width: 30%">
                    <input type="hidden" class="form-control" name="no" value="<?php echo $data['no']; ?>">Kode Produk
                </td>
                <td>
                    <input type="text" class="form-control" name="kodebarang" value="<?php echo $data['kode_barang']; ?>" required>
                </td>
            </tr>
            <tr>
                <td style="font-size : 20px; width : 30p%">Nama Produk</td>
                <td>
                    <input type="text" class="form-control" name="namabarang" value="<?php echo $data['nama_barang']; ?>" required>
                </td>
            </tr>
            <tr>
                <td style="font-size : 20px; width : 30p%">Harga Produk</td>
                <td>
                    <input type="Number" class="form-control" name="hargabarang" value="<?php echo $data['harga_barang']; ?>" required>
                </td>
            </tr>
            <tr>
                <td style="font-size: 20px; width: 30%">Satuan</td>
                <td>
                    <select name="satuan" class="form-control">
                        <option value="null">None</option>
                        <option <?php if($data['satuan'] == "Gelas"){ echo "selected=selected"; } ?> value="Gelas">Gelas</option>
                        <option <?php if($data['satuan'] == "Piring"){ echo "selected=selected"; } ?> value="Piring">Piring</option>
                        <option <?php if($data['satuan'] == "Mangkok"){ echo "selected=selected"; } ?> value="Mangkok">Mangkok</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="font-size: 20px; width: 30%">Kategori</td>
                <td>
                    <select name="kategori" class="form-control">
                        <option value="null">None</option>
                        <option <?php if($data['kategori'] == "Makanan"){ echo "selected=selected"; } ?> value="Makanan">Makanan</option>
                        <option <?php if($data['kategori'] == "Minuman"){ echo "selected=selected"; } ?> value="Minuman">Minuman</option>
                        <option <?php if($data['kategori'] == "Dessert"){ echo "selected=selected"; } ?> value="Desset">Dessert</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="font-size: 20px; width: 30%">URL Gambar</td>
                <td><input type="text" class="form-control" name="urlbarang" value="<?php echo $data['gambar']; ?>" required></td>
            </tr>
            <tr>
                <td style="font-size: 20px; width: 30%">Stok Awal</td>
                <td><input type="Number" class="form-control" name="stockbarang" value="<?php echo $data['stok']; ?>" required></td>
            </tr>
            <tr>
               <center>
                   <td colspan = 2 class="td"><input type="submit" name="edit" class="btn btn-primary" value="Edit"></td>
               </center> 
            </tr>
            
        </table>
    </form>
    <?php } ?>
    </center>
</div>


</body>
</html>
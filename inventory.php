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
    <div class="container" style="background-color: whitesmoke;">
    <table>
        <form action="save.php" method="post">
        <h3 style="text-align: center;">Form Input Barang</h3>
        <br>
        <div class="form-group row">
            <label for="inputtext" class="col-sm-2 col-form-label">Kode Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputtext" name="kodebarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputtext" name="namabarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext" class="col-sm-2 col-form-label">Harga Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputtext" name="hargabarang">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="inlineFormCustomSelectPref">Satuan</label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="satuan">
                    <option value="none">None</option>
                    <option value="Gelas">Gelas</option>
                    <option value="Piring">Piring</option>
                    <option value="Mangkok">Mangkok</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="inlineFormCustomSelectPref">Kategori</label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect " name="kategori">
                    <option value="none">None</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                `   <option value="Dessert">Dessert</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext" class="col-sm-2 col-form-label">URL Gambar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputtext" name="urlbarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext" class="col-sm-2 col-form-label">Stok Awal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputtext" name="stockbarang">
            </div>
        </div>
        <center>
            <button type="submit" class="btn btn-primary">Add</button>
        </center>
        </form>
    </table>

    </div>
    

        <?php
        include('koneksi.php');

        $result = $conn->query(" SELECT * FROM `master` ");

        ?>

        <br>
        <table class="table" border="2px">
                <tr>
                    <th style="text-align : Center">no</th>
                    <th style="text-align : Center">Kode Produk</th>
                    <th style="text-align : Center">Nama Produk</th>
                    <th style="text-align : Center">Harga Produk</th>
                    <th style="text-align : Center">Satuan Produk</th>
                    <th style="text-align : Center">Kategori</th>
                    <th style="text-align : Center">URL Produk</th>
                    <th style="text-align : Center">Stok Produk</th>
                    <th style="text-align : Center">Modify</th>
                 
                </tr>

        <?php foreach ($result as $data) {
            
            ?>

        <tr>
            <td style="text-align : Center"><?php echo $data['no'];?></td>
            <td style="text-align : Center"><?php echo $data['kode_barang'];?></td>
            <td style="text-align : Center"><?php echo $data['nama_barang'];?></td>
            <td style="text-align : Center"><?php echo $data['harga_barang'];?></td>
            <td style="text-align : Center"><?php echo $data['satuan'];?></td>
            <td style="text-align : Center"><?php echo $data['kategori'];?></td>
            <td style="text-align : Center"><?php echo $data['gambar'];?></td>
            

            <?php if ($data['stok'] < 5) {?>
                <td style="text-align : Center" bgcolor="red" style="color:white;"><?php echo $data['stok']; ?></td>
            <?php }else { ?>
                <td style="text-align : Center"><?php echo $data['stok']; ?></td>
            <?php } ?> 
                <td style="text-align : Center"><a href="inventoryedit.php?key=<?php echo $data ['no']; ?>">Edit</a> <a href="delete.php?key=<?php echo $data['no']; ?>">Delete</a></td>

        </tr>
            <?php } ?>


        </table>
        
        
        
      
</body>
</html>
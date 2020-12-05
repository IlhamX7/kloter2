<?php
    require 'functions.php';

    //ambil data di URL
    $id = $_GET["id"];

    //query data food berdasarkan id
    $frozenfood = query("SELECT * FROM product WHERE id = $id")[0];

    //cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {
        //cek apakah data berhasil di ubah atau tidak
        if( ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diedit!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diedit!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Detail nama makanan</title>
    </head>
    <body>
        <h1>Detail nama makanan</h1>
        <form action="" method="post" name="form1" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $frozenfood["id"]; ?>">
            <input type="hidden" name="photosLama" value="<?= $frozenfood["photos"]; ?>">
            <table>
                <tr>
                    <td for="nama">Name</td>
                    <td><input type="text" name="nama" id="nama" required value="<?= $frozenfood["nama"]; ?>"></td>
                </tr>
                <tr>
                    <td for="deskripsi">Desc</td>
                    <td><input type="text" name="deskripsi" id="deskripsi" required value="<?= $frozenfood["deskripsi"]; ?>"></td>
                </tr>
                <tr>
                    <td for="nutrisi">Nutrisi</td>
                    <td><input type="text" name="nutrisi" id="nutrisi" required value="<?= $frozenfood["nutrisi"]; ?>"></td>
                </tr>
                <tr>
                    <td for="serving_size">Serving Size</td>
                    <td><input type="text" name="serving_size" id="serving_size" required value="<?= $frozenfood["serving_size"]; ?>"></td>
                </tr>
                <tr>
                    <td for="id_distributor">Id Distributor</td>
                    <td><input type="text" name="id_distributor" id="id_distributor" required value="<?= $frozenfood["id_distributor"]; ?>"></td>
                </tr>
                <tr>
                    <td for="photos">Photos</td>  
                    <img src="img/<?= $frozenfood['photos']; ?>" width="100">
                    <td><input type="file" name="photos" id="photos" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Edit data</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
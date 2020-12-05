<?php
    require 'functions.php';

    //cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {
        //cek apakah data berhasil di tambahkan atau tidak
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah data makanan</title>
    </head>
    <body>
        <h1>Tambah data makanan</h1>
        <form action="" method="post" name="form1" enctype="multipart/form-data">
            <table>
                <tr>
                    <td for="nama">Nama</td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>
                <tr>
                    <td for="deskripsi">Desc</td>
                    <td><input type="text" name="deskripsi" id="deskripsi" required></td>
                </tr>
                <tr>
                    <td for="nutrisi">Nutrisi</td>
                    <td><input type="text" name="nutrisi" id="nutrisi" required></td>
                </tr>
                <tr>
                    <td for="serving_size">Serving Size</td>
                    <td><input type="text" name="serving_size" id="serving_size" required></td>
                </tr>
                <tr>
                    <td for="id_distributor">Id distributor</td>
                    <td><input type="text" name="id_distributor" id="id_distributor" required></td>
                </tr>
                <tr>
                    <td for="photos">Photos</td>
                    <td><input type="file" name="photos" id="photos"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Tambah Makanan</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
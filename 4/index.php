<?php
    //hubungkan halaman index dengan halaman function
    require 'functions.php';
    $frozenfood = query("SELECT * FROM product");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Halaman Utama</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            .container{
                margin-top: 4%;
            }
        </style>
    </head>
    <body>
        <h1>DW Froz</h1>
        <a href="tambah.php">Add Product</a>
        <br><br>

        <div class="container">
            <div class="row justify-content-center">
            <?php $i = 1; ?>
            <?php foreach( $frozenfood as $row ) : ?>
                <div class="col-md-4">
                    <div class="card shadow" style="width: 17rem;">
                        <img src="img/<?= $row["photos"]; ?>" class="card-img-top" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title1 text-left"><?= $row["nama"]; ?></h5>
                          <h6 class="card-title2 text-left" ><?= $row["id_distributor"]; ?></h6>
                          <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php $i++ ?>
            <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>
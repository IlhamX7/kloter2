<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "frozenfood");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;

        //ambil data dari tiap element dalam form
        $nama = htmlspecialchars($data["nama"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $nutrisi = htmlspecialchars($data["nutrisi"]);
        $serving_size = htmlspecialchars($data["serving_size"]);
        $id_distributor = htmlspecialchars($data["id_distributor"]);

        //upload foto
        $photos = upload();
        if( !$photos ) {
            return false;
        }

        //query insert data
        $query = "INSERT INTO product VALUES ('', '$nama', '$deskripsi', '$nutrisi', '$serving_size', '$id_distributor', '$photos')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM product WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;

        //ambil data dari tiap element dalam form
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $nutrisi = htmlspecialchars($data["nutrisi"]);
        $serving_size = htmlspecialchars($data["serving_size"]);
        $id_distributor = htmlspecialchars($data["id_distributor"]);
        $photosLama = htmlspecialchars($data["photosLama"]);

        // cek apakah user pilih gambar baru atau tidak
        if( $_FILES['photos']['error'] === 4 ) {
            $photos = $photosLama;
        } else {
            $photos = upload();
        }

        //query insert data
        $query = "UPDATE product SET nama = '$nama', deskripsi = '$deskripsi', nutrisi = '$nutrisi', photos = '$photos', serving_size = '$serving_size', id_distributor = '$id_distributor' WHERE id = $id ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload() {
        $namaFile = $_FILES['photos']['name'];
        $ukuranFile = $_FILES['photos']['size'];
        $error = $_FILES['photos']['error'];
        $tmpName = $_FILES['photos']['tmp_name'];

        //cek apakah tidak ada gambar yang diupload
        if( $error === 4 ) {
            echo "<script>alert('pilih gambar terlebih dahulu');</script>";
            return false;
        }

        //cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>
                    alert('yang anda upload bukan gambar!');
                  </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if( $ukuranFile > 1000000 ) {
            echo "<script>
                    alert('ukuran gambar terlalu besar!');
                  </script>";
            return false;
        }     
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;
    }
?>
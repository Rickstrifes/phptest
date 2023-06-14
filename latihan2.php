<?php 
    //cek apakah tidak ada data di $_GET
    // isset untuk mengecek sebuah variable sudah pernah dibikin atau belum 
    // maka kita cek apakah $_GET["Nama"] sudah dibikin atau belum ? makanya diset !
    if( !isset( $_GET["Nama"] ) || 
        !isset( $_GET["NRP"] ) ||
        !isset( $_GET["Email"] ) ||
        !isset( $_GET["Jurusan"] ) ||
        !isset( $_GET["Gambar"] ) 
        ){
        // redirect
        header("Location: latihan1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["Gambar"]; ?>"></li>
        <li><?= $_GET["Nama"]; ?></li>
        <li><?= $_GET["NRP"]; ?></li>
        <li><?= $_GET["Email"]; ?></li>
        <li><?= $_GET["Jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali Ke daftar Mahasiswa</a>
</body>
</html>
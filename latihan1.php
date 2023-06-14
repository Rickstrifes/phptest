<?php 
    //Varible scope / lingkup variable
    // ada 7 variable superglobals jadi bisa akses variable di ruanglingkup halaman php yaitu
    // $_GET
    // $_POST
    // $_REQUEST
    // $_SESSION
    // $_COOKIE
    // $_SERVER
    // $_ENV
    // yang sudah dimiliki php builtin
    // semua variable tersebut yang sudah tersedia
    // bertipe array assosiatif
    // $x = 10;
    // function tampilX() {
    //     global $x;
    //     echo $x;
    // }

    // tampilX();
    
    $mahasiswa = [
        [   "Nama" => "Rico"
            , "NRP" => "041234564"
            , "Email" => "ricosamuelrcs@gmail.com"
            , "Jurusan" => "Teknik Informatika"
            , "Gambar" => "photo1.jpg"
        ],
        [   "Nama" => "Samuel"
            , "NRP" => "891273647"
            , "Email" => "samuelricoss@gmail.com"
            , "Jurusan" => "Teknik Informatika"
            , "Gambar" => "photo2.jpg"
        ],
        [   "Nama" => "samuelricoss"
            , "NRP" => "041234564"
            , "Email" => "ricosamuelrcs@gmail.com"
            , "Jurusan" => "ricooeygila@gmail.com"
            , "Gambar" => "photo3.jpg"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?Nama=<?= $mhs["Nama"]; ?>
                    &NRP=<?= $mhs["NRP"]; ?>
                    &Email=<?= $mhs["Email"]; ?>
                    &Jurusan=<?= $mhs["Jurusan"]; ?>
                    &Gambar=<?= $mhs["Gambar"]; ?>
                    "
                    >
                    <?= $mhs["Nama"] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
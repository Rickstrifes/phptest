<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- arto dari kondisi if tersebut apakah variable $_POST sudah pernah di isi dengan submit ? maka tampilkan h1 blbabla -->
    <?php if( isset( $_POST["submit"] ) ) : ?>
        <h1>Halo Selamat Datang <?= $_POST["Nama"]; ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        Masukkan Nama :
        <input type="text" name="Nama">
        <br>
        <button type="submit" name="submit">Kirim !</button>
    </form>


</body>
</html>
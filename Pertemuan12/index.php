<?php
//koneksi ke database
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    //tombol cari ditekan
    if( isset($_POST["cari"]) ) {
        $mahasiswa = cari($_POST["keyword"]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">

    <input type="text" name="keyword" size="48" autofocus placeholder="Masukkan Keyword.." autocomplate="off">
    <button type="Submit" name="cari">Cari</button>
    </form>
    
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>|
                    <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confirm('yakin data di hapus?' );">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

    </table>
    
</body>
</html>
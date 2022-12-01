<?php 
// array multidimensi
// array di dalam array
  $mahasiswa = [
  ["Rahmad Dinata", "20241015", "PTI", "rahmaddinata@gmail.com"],
  ["Citra", "20241025", "PTI", "citra@gmail.com"],
  ["safar", "20241006", "PTI", "safar@gmail.com"]
];

// echo $mahasiswa[0][0];
// echo $mahasiswa[0][1];
// echo $mahasiswa[0][2];
// echo $mahasiswa[0][3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan Array Multidimensi</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NIM :<?= $mhs[1]; ?></li>
      <li>Jurusan :<?= $mhs[2]; ?></li>
      <li>Email: <?= $mhs[3]; ?></li>
      <br>
    <?php endforeach; ?>
  </ul>
</body>
</html>


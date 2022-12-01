<?php 
//   $mahasiswa = [
//   ["Rahmad Dinata", "20241015", "PTI", "rahmaddinata@gmail.com"],
//   ["Citra", "20241025", "PTI", "citra@gmail.com"],
//   ["safar", "20241006", "PTI", "safar@gmail.com"]
// ];

  // Array Associative
  // definisinya sama dengan array numerik, kecuali
  // key-nya adalah string yang kita buat sendiri

  $mahasiswa = [
    ["nama" => "Rahmad Dinata",
     "nim" => "20241015",
     "email" => "rahmaddinata@gmail.com",
     "jurusan" => "PTI"
    ],
    ["nama" => "Citra",
        "nim" => "20241025",
        "email" => "citra@gmail.com",
        "jurusan" => "PTI"
    ],
    ["nama" => "safar",
        "nim" => "20241006",
        "email" => "safar@gmail.com",
        "jurusan" => "PTI"
    ]
  ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asosiatif Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
      <li><?= $mahasiswa[0]; ?></li>
      <li><?= $mahasiswa[1]; ?></li>
      <li><?= $mahasiswa[2]; ?></li>
      <li><?= $mahasiswa[3]; ?></li>
    </ul>
    <br> -->

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li> 
    </ul>
    <?php endforeach; ?>

</body>
</html>
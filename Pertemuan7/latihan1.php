<?php
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
    <title>Array Asosiatif</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach($mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?nama=<?=$mhs["nama"]?>&nim=<?=$mhs["nim"]?>&jurusan=<?=$mhs["jurusan"]?>&email=<?=$mhs["email"]?>"><?= $mhs["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
    </ul>
    
</body>
</html>
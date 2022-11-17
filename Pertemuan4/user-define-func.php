<?php
    function salam ($waktu, $nama){
        return "Selamat $waktu, $nama!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Dunia Tipu-Tipu"); ?></h1>
    <h1>Selamat Pagi Kawan</h1>
    
</body>
</html>
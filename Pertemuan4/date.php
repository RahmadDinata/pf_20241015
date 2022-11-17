<?php
// Date
// menampilkan tanggal dengan format tertentu
// echo date ("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januaru 1970
// echo time();
// echo date("l d M y", time()-60*60*24*100);

// mktime
// membuat sendiri detik dari januari 1970 sampe waktu yang diinginkan
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun 
// echo mktime(0,0,0,9,19,2001);
// echo date("l d M y", mktime(0,0,0,9,19,2001));

// strtotime
// $date = strtotime("19 sep 2001");
// echo date("l d M Y", strtotime($date));

?>

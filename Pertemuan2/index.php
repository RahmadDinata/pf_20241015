<?php
    //standar output di php
    //echo, print, print-f, var_dump

    $nama = "Rahmad Dinata";
    echo "Hello, Nama saya $nama";

    //Operator
    //aritmatika
    //* / + - %
    $x = 10;
    $y = 20;
    echo $x + $y;

    //penggabugan string /concatenation /concat
    //.
    $nama_depan = "Rahmad";
    $nama_belakang = "Dinata";
    echo $nama_depan . " " . $nama_belakang;

    //assignment
    //=,+=,-=,*=,/=,%=,.=
    $x = 1;
    $x /= 5;
    echo $x;
    $nama .= $nama_depan;
    $nama .= " ";
    $nama .= $nama_belakang;
    echo $nama;
    
?>
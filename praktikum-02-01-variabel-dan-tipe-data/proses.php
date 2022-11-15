<?php  

if ($txtnim = isset ($_POST["txtnim"]) ? $_POST["txtnim"] : "" 
    AND $txtnama = isset ($_POST["txtnama"]) ? $_POST["txtnama"] : "" 
    AND $txtpstudi = isset ($_POST["txtpstudi"]) ? $_POST["txtpstudi"] : ""){
    echo "<p>Hai, perkenalkan nama saya adalah : ".$txtnama." dengan NIM : ".$txtnim.". Saya adalah mahasiswa dari program studi :".$txtpstudi;
}
else
{
   echo("Isi Semua Data,'<a href=input.html>Klik Di Sini</a>' untuk kembali" );
}
?>
<?php
$data = array();
for ($i=1; $i<=100; $i++)
{
    $angka_acak = rand(1, 1000);
    array_push ($data, $angka_acak);
    
}

foreach ($data as $bilangan_genap)
{
    $hasil_bagi = $bilangan_genap % 2;
    if ($hasil_bagi == 0)
    {
        echo $bilangan_genap."<br>";
    }
}


?>


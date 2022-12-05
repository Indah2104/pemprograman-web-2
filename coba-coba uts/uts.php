<?php
$nama="Nurlinda Apriliani";
$nim=20202205081;

echo "Nama saya ".$nama." dan Nim saya ".$nim;
?>

<?php
$mahasiswa = array

(

array("nim"=>"123", "nama"=>"Andi"),

array("nim"=>"456", "nama"=>"Budi"),

array("nim"=>"789", "nama"=>"Wati")

);

            /* Tulis Code Anda di sini */
            foreach ($mahasiswa as $data)
            {
                echo "<li> Nim ".$data['nim']." Nama ".$data['nama']."</li>";  
                
            }


?>
<?php

$kelompok_1 = array("Andi", "Budi", "Wati", "Dedi", "Bambang");

$kelompok_2 = array("Bambang", "Wati", "Gunawan", "Fadli");

$kelompok_3 = array_diff($kelompok_2, $kelompok_1);

$bukan_python = array_diff ($kelompok_2, $kelompok_1);
        echo "<ul>";
        asort($bukan_python);
        foreach ($bukan_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

?>
<?php if ($a==1){ echo "satu";} ?>
<?php if ($a==1)
    { 
        echo "satu";
    
    } else 
    {
         echo "bukan satu";
         } 
         ?>

<?php

<?php

$n=1;

for ($i=1; $i<$x=96; $i++)

{

$n = $n + $i;

echo $n;
}

?>



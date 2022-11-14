<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas array2</title>
</head>
<body>

    <table border = "1" cellspacing = "0" width = 550px>
        <tr>
            <td bgcolor = "yellow" >Programmer PHP </td>
            <td width = 400px >Andi, Budi, Wati, Gunawan, Baco, Becce, Fatma</td>
        </tr>
        <tr>
            <td bgcolor = "yellow" >Programmer Phyton </td>
            <td>Andi, Fatma, Fadli, Haris, Baco</td>
        </tr>
    </table>
    <br/>
    <?php
        $program_php = array ("Andi", "Budi", "Wati" , "Gunawan" , "Baco" , "Becce" , "Fatma");
        $program_phyton = array ("Andi" , "Fatma" , "Fadli" , "Haris" , "Baco");
        
        echo "Daftar mahasiswa yang masuk kelompok Programmer PHP dengan nama diurutkan secara Ascending : ";
        echo "<ul>";
        asort($program_php);
        foreach ($program_php as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Daftar mahasiswa yang masuk kelompok Programmer Python dengan nama diurutkan secara Descending :";
        echo "<ul>";
        arsort($program_phyton);
        foreach ($program_phyton as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Daftar mahasiswa yang masuk kelompok Programmer PHP tapi tidak termasuk kelompok Programmer Python : ";
        $bukan_python = array_diff ($program_php, $program_phyton);
        echo "<ul>";
        asort($bukan_python);
        foreach ($bukan_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";


        echo "Daftar mahasiswa yang masuk kelompok Programmer Python tapi tidak termasuk kelompok Programmer PHP : ";
        $bukan_php = array_diff ($program_phyton, $program_php);
        echo "<ul>";
        asort($bukan_php);
        foreach ($bukan_php as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Daftar mahasiswa yang masuk kelompok Programmer PHP dan Programmer Python sekaligus : ";
        $php_dan_python = array_intersect ($program_phyton, $program_php);
        echo "<ul>";
        asort($php_dan_python);
        foreach ($php_dan_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";


        echo "Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP atau Programmer Python. Satukan terlebih dahulu data dari kedua variabel array dengan teknik merge : ";
        $program = array_unique (array_merge ($program_php, $program_phyton));
        echo "<ul>";
        asort($program);
        foreach ($program as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";


        echo "Lengkapi file array_2 php dengan perintah untuk menambahkan nama Anda ke dalam variabe programmer_php dengan menggunakan perintah array push().";
        array_push($program_php, "Nurlinda Apriliani");
        echo "<ul>";
        $countProgramPhp = count($program_php);
        for($i=0; $i < $countProgramPhp; $i++)
        {
            echo "<li>".$program_php[$i] . "<br>";
        }
        echo "</ul>";


    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Mengakses Variabel Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    $mahasiswa = array
    (
    array("nim"=>"TI-001", "nama_mahasiswa"=>"Andi", "program_studi"=>"Teknik Informatika"),
    array("nim"=>"TI-002", "nama_mahasiswa"=>"Budi", "program_studi"=>"Teknik Informatika"),
    array("nim"=>"TI-003", "nama_mahasiswa"=>"Wati", "program_studi"=>"Teknik Informatika"),
    array("nim"=>"SI-001", "nama_mahasiswa"=>"Fatma", "program_studi"=>"Sistem Informasi"),
    array("nim"=>"SI-002", "nama_mahasiswa"=>"Wawan", "program_studi"=>"Sistem Informasi")

    );
    ?>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
        </tr>

        <?php
        $no = 1;
            /* Tulis Code Anda di sini */
             foreach ($mahasiswa as $mahasiswa)
            {
                echo "<tr>";
                echo "<td>".$no."</td>
                    <td>".$mahasiswa['nim']."</td>
                    <td>".$mahasiswa['nama_mahasiswa']."</td>
                    <td>".$mahasiswa['program_studi']."</td>";
                echo "</tr>";
                $no++;
            }
        ?>
    </table>
</body>
</html>
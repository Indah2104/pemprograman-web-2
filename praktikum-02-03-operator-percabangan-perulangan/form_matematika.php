<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tugas 3 Nurlinda</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-mt-6">
        <div class="card">
          <div class="card-header text-center">
            <h2>Operator aritmatika</h2>
            <p> 20202205081 - Nurlinda Apriliani</p>
            <?php
            $hari = date ("D");
            switch ($hari)
            {
              case"Sun": $hari="Minggu";
              break;
              case"Mon": $hari="Senin";
              break;
              case"Tue": $hari="Selasa";
              break;
              case"Wed": $hari="Rabu";
              break;
              case"Thu": $hari="Kamis";
              break;
              case"Fri": $hari="Jumat";
              break;
              case"Sat": $hari="Sabtu";
              break;          
            }

            $bulan = date ("n");
            switch ($bulan)
            {
              case"1": $bulan="Januari";
              break;
              case"2": $bulan="Februari";
              break;
              case"3": $bulan="Maret";
              break;
              case"4": $bulan="April";
              break;
              case"5": $bulan="Mei";
              break;
              case"6": $bulan="Juni";
              break; 
              case"7": $bulan="Juli";
              break;
              case"8": $bulan="Agustue";
              break;
              case"9": $bulan="September";
              break;
              case"10": $bulan="Oktober";
              break;
              case"11": $bulan="November";
              break;
              case"12": $bulan="Desember";
              break;
            }
            date_default_timezone_set ('Asia/Makassar');
            echo $hari.date(', d ').$bulan.date(' Y H:i:s');
          ?>
            </div>
              <div class="card-body">
                <form action="form_matematika.php" method="post">
                <div class="row mb-4">
                  <label for="inputnumber3" class="col-sm-2 col-form-label" >Angka Pertama</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="angka1" name="pertama">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="inputnumber3" class="col-sm-2 col-form-label" >Angka Kedua</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="angka2" name="kedua">
                  </div>
                </div>
                <button type="submit" class="btn btn-success" id="hitung">HITUNG</button>
                  <?php
                  $data = isset ($_POST["pertama"]) ? $_POST["pertama"] : "" AND isset ($_POST["kedua"]) ? $_POST["kedua"] : "";
                  if (empty($data)){
                                        
                  }
                  else{
                    echo "Hasil Penjumlahan";
                    echo "Hasil Pengurangan";
                    echo "Hasil Perkalian";
                    echo "Hasil Pembagian";
                    echo "Sisa Hsail Bagi ";
                  }
                  ?>
                </form>
              </div>            
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
 </html>
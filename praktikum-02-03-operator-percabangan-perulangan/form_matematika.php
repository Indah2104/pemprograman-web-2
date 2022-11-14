<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>tugas 3 nurlinda</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-mt-3">
                <div class="card-header text-center">
                    <h2>Operator aritmatika</h2>
                    <p>20202205081 - Nurlinda Apriliani</p>
                      <?php
                        echo "<p>".date("I,d F Y  H:i:s")."</p>";
                      ?>
                </div>
                <form action="proses.php" method="post">
                    <div class="row mb-3">
                      <label for="inputnumber3" class="col-sm-2 col-form-label" >Angka Pertama</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputangka1" name="angka1">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputnumber3" class="col-sm-2 col-form-label">Angka Kedua</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputangka2" name="angka1">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success" id="btnSimpan" onclicl = "notif()" >HITUNG</button>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="notif.js"></script>

</body>
 </html>
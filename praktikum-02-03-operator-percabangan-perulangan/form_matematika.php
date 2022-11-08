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
                <head>
                    <h2>Operatot aritmatika</h2>
                    <p>Nurlinda Apriliani - 2020220081</p>
                    <p></p>
                </head>
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
                    <button type="submit" class="btn btn-success" id="btnSimpan" onclicl = "validasi ()" >HITUNG</button>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="validasi.js"></script>

</body>
 </html>
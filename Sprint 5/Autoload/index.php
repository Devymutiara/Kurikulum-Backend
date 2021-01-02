<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex align-items-center vh-100 ">
        <div class="container">
            <div class="row">

                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <h2><b> Perhitungan Luas Lingkaran</b></h2>
                            <form action="kalkulasi.php?bangun=lingkaran" method="POST">
                                <div class="form-group">
                                    <label>Masukkan nilai jari-jari :</label>
                                    <input type="number" class="form-control" name="radius" placeholder="Jari-jari"><br>
                                    <button class="btn btn-success" name="lingkaran" type="submit">Kalkulasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <h2><b>Perhitungan Luas Persegi</b></h2>
                            <form action="kalkulasi.php?bangun=persegi" method="POST">
                                <div class="form-group">
                                    <label>Masukkan nilai sisi :</label>
                                    <input type="number" class="form-control" name="sisi" placeholder="Sisi"><br>
                                    <button class="btn btn-success" name="persegi" type="submit">Kalkulasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h2><b>Perhitungan Luas Segitiga</b></h2>
                            <form action="kalkulasi.php?bangun=segitiga" method="POST">
                                <div class="form-group">
                                    <label>Masukkan nilai alas dan tinggi :</label>
                                    <input type="number" class="form-control" name="alas" placeholder="Alas"><br>
                                    <input type="number" class="form-control" name="tinggi" placeholder="Tinggi"><br>
                                    <button class="btn btn-success" name="segitiga" type="submit">Kalkulasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>
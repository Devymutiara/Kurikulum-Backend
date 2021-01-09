<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="hasil.php" method="POST">
                            <div class="form-group">
                                <h2>Volume Kubus</h2>
                                <label for="">Masukkan nilai sisi :</label>
                                <input type="text" name="sisi" class="form-control"> <br>
                                <input type="submit" name="kubus" value="Hitung" class="btn btn-warning">
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <br>
                <div class="card">
                    <div class="card-body">
                        <form action="hasil.php" method="POST">
                            <div class="form-group">
                                <h2>Volume Limas Segitiga</h2>
                                <label for="">Masukkan nilai alas :</label>
                                <input type="text" name="alas" class="form-control">
                                <label for="">Masukkan nilai tinggi segitiga :</label>
                                <input type="text" name="tinggi" class="form-control">
                                <label for="">Masukkan nilai tinggi limas :</label>
                                <input type="text" name="tinggilimas" class="form-control"> <br>
                                <input type="submit" name="limas" value="Hitung" class="btn btn-warning">
                        </form>
                    </div>
                </div>
                <br>
                <br>
                
                <div class="card">
                    <div class="card-body">
                        <form action="hasil.php" method="POST">
                            <div class="form-group">
                                <h2>Volume Prisma Segitiga</h2>
                                <label for="">Masukkan nilai alas :</label>
                                <input type="text" name="alas" class="form-control">
                                <label for="">Masukkan nilai tinggi segitiga :</label>
                                <input type="text" name="tinggi" class="form-control">
                                <label for="">Masukkan nilai tinggi prisma :</label>
                                <input type="text" name="tinggiprisma" class="form-control"> <br>
                                <input type="submit" name="prisma" value="Hitung" class="btn btn-warning">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
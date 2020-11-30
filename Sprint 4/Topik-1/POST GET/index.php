<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
    <style>
        body {
            margin: 0 auto;
            text-align: center;
        }
        h2 {
            line-height: 4em;
        }
        label {
            padding-right: 5em;
        }
        .form {
            text-align: left;
            display: inline-block;
        }
        #submit {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h2>Form Input Data Barang</h2>
    <div class="form">
        <form action="tabel.php" method="POST">
            <label for="namaBarang">Nama barang :</label>&thinsp;&thinsp;
            <input type="text" name="namaBarang"><br><br>
            <input type="hidden" name>

            <label for="harga">Harga barang :</label>&thinsp;
            <input type="text" name="harga" id=""><br><br><br>
            <input type="submit" value="Masukkan" id="submit"><br><br><br><br>
            
        </form>
        <form action="tabel.php" method="GET">
            <label for="kurir">Nama Kurir :</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="kurir" id=""><br><br>

            <label for="pengirim">Pengirim :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&thinsp;
            <input type="text" name="pengirim"><br><br>

            <label for="asalBarang">Asal barang :</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="asalBarang"><br><br>

            <label for="tujuan">Tujuan barang:</label>&thinsp;
            <input type="text" name="tujuan"><br><br><br>
            <input type="submit" value="Masukkan" id="submit">

        </form>

    </div>

</body>

</html>

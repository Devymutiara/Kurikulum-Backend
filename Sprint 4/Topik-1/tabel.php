<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0 auto;
            text-align: center;
        }
        h2 {
            line-height: 4em;
        }
        table {
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h2>Tabel Data Barang</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Nama Kurir</th>
            <th>Nama Pengirim</th>
            <th>Asal Barang</th>
            <th>Tujuan Barang</th>
        </tr>
        <tr>
            <td><?php echo $_POST['namaBarang']?></td>
            <td><?php echo $_POST['harga']?></td>
            <td><?php echo $_GET['kurir']?></td>
            <td><?php echo $_GET['pengirim']?></td>
            <td><?php echo $_GET['asalBarang']?></td>
            <td><?php echo $_GET['tujuan']?></td>
        </tr>
    </table>

</body>
</html>

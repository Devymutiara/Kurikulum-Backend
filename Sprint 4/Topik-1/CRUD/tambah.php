<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <a href="index.php">KEMBALI</a><br><br>
    <center>
        <h2>Tambah Data</h2>
        <br>
        <form action="tambah_action.php" method="POST">
            <table>
                <tr>
                    <td><label for="nama">Nama peminjam :</label></td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td><label for="judul">Judul buku :</label></td>
                    <td><input type="text" name="judul" required></td>
                </tr>
                <tr>
                    <td><label for="seri">No seri :</label></td>
                    <td><input type="text" name="seri" maxlength="6" placeholder="XXXXXX" required></td>
                </tr>
                <tr>
                    <td><label for="tanggal">Tanggal peminjaman :</label></td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td><label for="lama">Lama peminjaman :</label></td>
                    <td><input type="number" name="lama" required></td>
                </tr>
                
            </table><br><br><input type="submit" name="submit" value="Kirim">
        </form>
    </center>
</body>

</html>
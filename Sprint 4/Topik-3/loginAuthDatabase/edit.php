<?php
require_once("koneksi.php");
 
$id = $_GET['id']; // id berasal dari url'
$query = "SELECT * FROM peminjaman_buku WHERE id = '$id'";
$data = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php" style="text-decoration: none">KEMBALI</a><br><br>
    <center>
        <h2>Edit Data</h2>
        <?php while($row = mysqli_fetch_assoc($data)) :?>
        <form action="edit_action.php" method="POST">
            <table>
                <tr>
                    <td> <input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama peminjam :</label></td>
                    <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="judul">Judul buku :</label></td>
                    <td><input type="text" name="judul" value="<?php echo $row['judul']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="seri">No seri :</label></td>
                    <td><input type="text" name="seri" maxlength="6" placeholder="XXXXXX"
                            value="<?php echo $row['seri']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="tanggal">Tanggal peminjaman :</label></td>
                    <td><input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="lama">Lama peminjaman :</label></td>
                    <td><input type="number" name="lama" value="<?php echo $row['lama']; ?>"></td>
                </tr>
            </table><br><br><input type="submit" name="submit" value="Simpan">
        </form>
        <?php
        endwhile;
        ?>
    </center>
</body>

</html>
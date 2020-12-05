<?php
        require_once("koneksi.php");
        $data = mysqli_query($koneksi,"SELECT *
                             FROM `peminjaman_buku` WHERE 1");
                             
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
</head>

<body>
    <center>
        <h2>Daftar Peminjaman Buku</h2>
        <br>

        <br><br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>No Seri</th>
                <th>Tanggal Peminjaman</th>
                <th>Lama Peminjaman</th>
                <th>Opsi</th>
            </tr>
            <?php
            $no = 1;   
            while($row = mysqli_fetch_assoc($data)) :?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['judul']; ?></td>
                <td><?php echo $row['seri']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['lama']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Anda yakin? Hal ini dapat menghapus data secara permanen.');">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table><br>
    </center>
    <div style="text-align: center;">
        <div style="display: inline-block; text-align: left;">
            <a href="tambah.php">+ Tambah Data Sewa</a>
        </div>
    </div>
</body>

</html>
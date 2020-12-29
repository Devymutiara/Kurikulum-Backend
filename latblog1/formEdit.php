<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

<a href="index.php">kembali</a>
<center>
    <h2>Form Edit</h2> <br>
    <form action="">
        <label>Kegiatan : &nbsp;&nbsp;&nbsp;<input type="text" name="kegiatan"></label> <br>
        <label>Keterangan :<input type="text" name="keterangan"></label> <br>
        <label>Penulis : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="penulis"></label> <br>
        <label>Status : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><select name="status" id="">
            <option value="1">Planning</option>
            <option value="2">On Progress</option>
            <option value="3">Done</option>
        </select>
    </form>
</center>
</body>
</html>
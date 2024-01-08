<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="tambahdata.php" method="post" style="display:flex; flex-direction:column; max-width: 50vw;">
    <div><a href="list.php">
        Kembali
    </a></div>    
    <label>Nama</label>
        <input type="text" name="nama">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        <label for="usia">Usia</label>        
        <input type="text" name="usia">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="">
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <button type="submit">Kirim Data</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <?php
    include('koneksi.php');
    $seleksi_id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id = '$seleksi_id'");
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC); 
    ?>
    <form action="editdata.php" method="post" style="display:flex; flex-direction:column; max-width: 50vw;">
        <input type="hidden" name="id" value="<?php echo $hasil[0]['id']?>">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $hasil[0]['nama']?>">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10"><?php echo $hasil[0]['alamat']?></textarea>
        <label for="usia">Usia</label>        
        <input type="text" name="usia" value="<?php echo $hasil[0]['usia']?>">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="">
            <option value="Laki-laki" <?php echo($hasil[0]['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''  ;?>>Laki-Laki</option>
            <option value="Perempuan" <?php echo($hasil[0]['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''  ;?>>Perempuan</option>
        </select>
        <button type="submit">Update Data</button>
    </form>
</body>
</html>
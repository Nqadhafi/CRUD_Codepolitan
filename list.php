<?php

include('koneksi.php');
$query = mysqli_query($koneksi,'SELECT * FROM karyawan');
$hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Crud</title>
</head>
<body>
    <div>
        <a href="tambah.php">
            <br>
            <button>Tambah Data</button>
        </a>
    </div>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Usia</td>
            <td>Jenis Kelamin</td>
            </tr>
            <?php foreach ($hasil as $hasil):?>
                <tr>
                    <td><?php echo $hasil['nama'];?></td>
                    <td><?php echo $hasil['alamat'];?></td>
                    <td><?php echo $hasil['usia'];?></td>
                    <td><?php echo $hasil['jenis_kelamin'];?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
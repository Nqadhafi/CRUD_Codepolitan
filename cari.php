<?php

include('koneksi.php');
$kata_kunci = $_GET['katakunci'];

$query = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE nama='$kata_kunci'");
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
        <a href="list.php">
            <br>
            <button>Kembali</button>
        </a>
        
        <br>
        <br>
        <form action="cari.php" method="get">
            <input type="text" name="katakunci" placeholder="masukkan kata kunci" value="<?php echo $_GET['katakunci']?>">
            <button type="submit"> Cari Data</button>
        </form>
        <?php   
        if($query){
            echo "Data berhasil ditemukan.";
        }
        else {
            echo "Tidak ada data terkait";
        }
        ?>
        <br>
    </div>
    
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Usia</td>
            <td>Jenis Kelamin</td>
            <td>Option</td>
            </tr>
            <?php foreach ($hasil as $hasil):?>
                <tr>
                    <td><?php echo $hasil['nama'];?></td>
                    <td><?php echo $hasil['alamat'];?></td>
                    <td><?php echo $hasil['usia'];?></td>
                    <td><?php echo $hasil['jenis_kelamin'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $hasil['id']?>">Ubah</a>
                        <a href="delete.php?id=<?php echo $hasil['id']?>" onclick="if(!confirm('Apakah Anda Yakin Menghapus Data Ini?')){return false;}" style="background-color: red; color: white;">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
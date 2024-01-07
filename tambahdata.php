<?php 
include('koneksi.php');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$jeniskelamin = $_POST['jenis_kelamin'];

$tambahdata = mysqli_query($koneksi, "INSERT INTO karyawan SET nama='$nama',alamat='$alamat',usia='$usia',jenis_kelamin='$jeniskelamin'");

if ($tambahdata) {
    header('Location: list.php');
}
else {
    echo "gagal";
}
?>
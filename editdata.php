<?php
include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$jeniskelamin = $_POST['jenis_kelamin'];

$editdata = mysqli_query($koneksi, "UPDATE karyawan SET nama='$nama',alamat='$alamat',usia='$usia', jenis_kelamin ='$jeniskelamin' WHERE id = $id");

if ($editdata) {
    header('Location: list.php');
}
else {
    echo "gagal";
}

?>
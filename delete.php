<?php
include ('koneksi.php');
$selektor_id = $_GET['id'];

echo $selektor_id;

$query = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id = $selektor_id");

if($query)
{
    header("Location: list.php");
}
else{
    echo "Proses delete gagal lur";
}
?>
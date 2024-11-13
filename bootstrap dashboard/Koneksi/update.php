<?php
include 'koneksi.php';

$id         =$_POST['id'];
$nama       =$_POST['nama'];
$harga      =$_POST['harga'];
$stok      =$_POST['stok'];

$query = mysqli_query($connect, "UPDATE toko_hp SET nama='$nama', harga='$harga', stok='$stok' WHERE id='$id'");
if($query) {
    echo "<div class='alert alert-success' style='text-align:center;'>data berhasil diubah</div>";
} else {
    echo "<div class='alert alert=danger'>upload failed. try again.</div>'";
}
?>


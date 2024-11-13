<?php
include 'koneksi.php';

$nama   =$_POST['nama'];
$harga   =$_POST['harga'];
$stok  =$_POST['stok'];
$query = mysqli_query($connect, "INSERT INTO toko_hp (nama,harga,stok) values ('$nama','$harga','$stok')");
if ($query) {
    echo "<div class='alrert alret-success' style='text-align:center;'>data berhasil ditambahkan</div>";
}else{
    echo "<div class='alrert alret-danger'>upload failed. try again</div>";
}
?>
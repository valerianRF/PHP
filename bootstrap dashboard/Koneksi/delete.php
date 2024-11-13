<?php
include 'koneksi.php';
$id     =$_GET['id'];
$sql    =$connect -> query("select * from toko_hp where id='$id'");
$data   =$sql ->fetch_assoc();
$query = $connect->query("DELETE from toko_hp where id='$id'");
if ($query) {
    header ("location:../mp.php");
}   else {
    header ("location:../mp.php");
} 
?>
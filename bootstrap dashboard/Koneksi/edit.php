<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update barang</h1>
    <?php
include 'koneksi.php';
$query = mysqli_query($connect, "SELECT * FROM toko_hp");
while ($data = mysqli_fetch_array ($query)) { 
    ?>

    <form action="update.php" method = "POST">
    <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>">
        <input type="text" name = "nama" value = "<?php echo $data['nama'];?>">
        <input type="text" name = "harga" value = "<?php echo $data['harga'];?>">
        <input type="text" name = "stok" value = "<?php echo $data['stok'];?>">
        <button type = "submit" name = "update">update</button>
    </form>  <?php }  ?>





</body>
</html>
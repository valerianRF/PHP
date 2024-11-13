<?php
include 'Koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
   
<div class="row g-0">
    <div class="col-md-2 d-flex flex-column  p-3 text-white bg-success " style="position: sticky; top: 0; height: 100vh; overflow-y: auto;  ">
    <a class="d-flex alignment-items-center text-white text-decoration-none " href=""><span class="fw-bold fs-5 mb-3"> Belajar Bootstrap</span></a>

 <ul class="nav nav-pills flex-column mb-auto ">
    
    <li class="nav-item">   
        <a href="index.php" class="nav-link text-white"><i class="bi bi-house-door me-2"></i>Home</a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link active text-white"><i class="bi bi-hdd me-2"></i>master project</a>
    </li>
    <li class="nav-item">
        <a href="ms.php" class="nav-link text-white"><i class="bi bi-hammer me-2"></i></i>master service</a>
    </li>
 </ul>
 <hr>

<div class="dropdown">
<div class="dropdown">
    <a class=" dropdown-toggle text-white bg-success text-decoration-none "  data-bs-toggle="dropdown" aria-expanded="false">
      <strong>admin</strong>
    </a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </div>
</div>
    </div>

<div class="col-md-10 bg-white overflow-auto">
    <div class="container-fluid">
        <div class="row">
            <h2 class="mt-2">master project</h2>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>barang</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">


                            <thead>
                                
                                <th>nama barang</th>
                                <th>harga</th>
                                
                                <th>stok</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                <tr>
                                <?php
            include 'Koneksi/koneksi.php';
                $query = mysqli_query($connect, "SELECT * FROM toko_hp order by id asc limit 10");
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['harga']?></td>
                <td><?php echo $data['stok']?></td>
                                    <td>
                                        <a class="btn btn-warning" href="Koneksi/edit.php?id=<?php echo $data['id'];?>"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger" href="Koneksi/delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus')"><i class="bi bi-trash"></i></a>
                                        <button class="btn btn-info " data-bs-toggle="modal" data-bs-target="#detailproject" ><i class="bi bi-eye-fill"></i></button>
                                    </td>
                                    
                                </tr>

                               
                            </body> <?php } ?>
                            
                        </table>
                        <div class="modal" tabindex="-1" id="detailproject">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>Tambah Barang</h6>
                    </div>
                    <div class="card-body">
                        <form action="Koneksi/tambah.php " method="POST">
                            <label class="form-label" for="nama" >Nama Barang</label>
                            <input class="form-control" type="text" for="nama" id="nama" name="nama">
                            <label class="form-label" for="harga" >Harga Barang</label>
                            <input class="form-control" type="text" for="harga" id="harga" name="harga">
                            <label class="form-label" for="stok" >Stok</label>
                            <input class="form-control" type="text" for="stok" id="stok" name="stok">
                            
                            
                                
                           

                            <input class="btn btn-success mt-2" type="submit" value="simpan">
                            <input class="btn btn-danger mt-2" type="button" value="cancel">
                        </form>
                    </div>
                
                <div class="card-footer">

                </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</html>
</body>
</html>
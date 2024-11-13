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
        <a href="mp.php" class="nav-link  text-white"><i class="bi bi-hdd me-2"></i>master project</a>
    </li>
    <li class="nav-item">
        <a href="ms.php" class="nav-link active text-white"><i class="bi bi-hammer me-2"></i></i>master service</a>
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
            <h2 class="mt-2">master service</h2>
        </div>
        



        <div class="row">
            <div class="col-md-8 padding-bottom-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>DATA SERVICE</h6>
                    </div>
                    <div class="card-body overflow-auto p-lg-3 w-100 position-relative">
                        <table class="table table-responsive">
                            
                            <tbody>
                                <tr>
                                    <td>company Profile</td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint consequatur voluptates sapiente unde magni? Animi cumque ratione perspiciatis nulla enim impedit velit itaque sit eius, consectetur explicabo eaque quos quo?</td>
                                </tr>
                            
                        </table>
                        
                    </div>
                    
                </div>
            </div>




        <!-- form -->
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>Tambah Service</h6>
                    </div>
                    <div class="card-body">
                        <form action="">
                            </select>
                            <label class="form-label" for="">Service Name</label>
                            <input class="form-control" type="text" required>
                            
                            <label class="form-label" for="">Description</label>
                            <textarea class="form-control" name="" id=""></textarea>
                           

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
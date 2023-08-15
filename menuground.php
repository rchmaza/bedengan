<?php
session_start();
if ( !isset($_SESSION["log"])) {
  header("Location: login.php");
  exit;
} else {
  header("Location: logout.php");
  exit;
}
require 'fungsi.php';
// require 'fungsi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Taman Wisata Bedengan</title>
  </head>
  <body>
  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">TAMAN WISATA BEDENGAN</span></h1>
          <hr>
          <p class="lead font-weight-bold">Cocok Camping Disini <br> </p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.html"><strong>Taman</strong> Wisata Bedengan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">GROUND</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->
      <div class="container">
       
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/A.jpeg" height="200px" width="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground A</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="1" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLongA">ADD</button>
                                <div class="modal fade" id="exampleModalLongA" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-body">
                                    BERHASIL DITAMBAHKAN KE PESANAN ANDA <a class="cek">&#9989;</a>
                                </div>
                                </div>
                            </div>
                            </div>
                              </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Ground A</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img src="images/A.jpeg" width="400px" height="400px" class="d-block w-100" alt="Gambar 1">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="images/B.jpeg" width="400px" height="400px" class="d-block w-100" alt="Gambar 2">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="images/C.jpeg" width="400px" height="400px" class="d-block w-100" alt="gambar 3">
                                          </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>                        
                                      </div>
                                      

                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                                   
                                
                    </div>
    
                  </div>
                </div>
              </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/B.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Ground B</h5>
               
                
                <div class="button" >
					<form action="" method="post">
						<div class="inputwrapper">
                            <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                            <span>(Hari)</span>
                            <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                        </div>
						
					</form>
                </div>
                <div class="add">
                </div>
                
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong1">
                        LIHAT
                       </button>
                                 
                               <!-- Modal -->
                               <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLongTitle1">Ground B</h5>                                                                           
                                   </div>
                                   <div class="modal-body">
                                       ...
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   </div>
                                   </div>
                               </div>
                               </div>
                
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/C.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Ground C</h5>
               
                
                <div class="button" >
					<form action="" method="post">
						<div class="inputwrapper">
                            <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                            <span>(Hari)</span>
                            <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                        </div>
						
					</form>
                </div>
                <div class="add">
                </div>
                
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                        LIHAT
                       </button>
                                 
                               <!-- Modal -->
                               <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLongTitle">Ground C</h5>                                                                           
                                   </div>
                                   <div class="modal-body">
                                    
                                
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   </div>
                                   </div>
                               </div>
                               </div>
                
                </div>

              </div>
            </div>
            
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/D.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Ground D</h5>
               
                
                <div class="button" >
					<form action="" method="post">
						<div class="inputwrapper">
                            <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                            <span>(Hari)</span>
                            <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                        </div>
						
					</form>
                </div>
                <div class="add">
                </div>
                
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                        LIHAT
                       </button>
                                 
                               <!-- Modal -->
                               <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLongTitle">Ground D</h5>                                                                           
                                   </div>
                                   <div class="modal-body">
                                       ...
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   </div>
                                   </div>
                               </div>
                               </div>
                
                </div>

              </div>
            </div>
          </div>
         </div>  

         <div class="row mt-3">
            <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/E.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground E</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/F.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground F</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/G.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground G</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/H.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground H</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>
         </div>  
         <div class="row mt-3">
            <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/I.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground I</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/J.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground J</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/K.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground K</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/L.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground L</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>
         </div>
         <div class="row mt-3">
            <div class="col-md-3">
                <div class="card border-dark">
                  <img src="images/M.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ground M</h5>
                   
                    
                    <div class="button" >
                        <form action="" method="post">
                            <div class="inputwrapper">
                                <input class="quantity" min="0" name="quantity" value="1" type="number" style="width: 50px;" class="form-control-inline" required/>
                                <span>(Hari)</span>
                                
                                <button href="#" class="btn btn-danger btn-sm" >ADD</button>

                            </div>
                            
                        </form>
                    </div>
                    <div class="add">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                            LIHAT
                           </button>
                                     
                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>                                                                           
                                       </div>
                                       <div class="modal-body">
                                           ...
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                       </div>
                                   </div>
                                   </div>
                    
                    </div>
    
                  </div>
                </div>
              </div>    
         </div>
           
         </div> 
      </div>
  <!-- Akhir Menu -->

  <!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2020 -  Designed by Alfirdaus&Rinaldo</p>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="slide.js"></script>
  </body>
</html>
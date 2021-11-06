<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <!-- My Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css">

    <title>Praktikum Luring</title>
  </head>
  <body>
  <!-- Navbar 1-->
  <!-- "bg-light" merupakan class untuk memberi background pada navbar-->

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <a href=""><img class="logo" src="img/logo_polije.png"></a>
        <a class="navbar-brand" href="#">Laboratorium</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!--Penambahan Class "ml-auto" menambahkan margin leftnya auto sehingga navbar nempel ke kanan -->
        <div class="navbar-nav ml-auto">
            
            <a class="nav-item nav-link active" href="index.html"><i class="fa fa-home"></i>Beranda <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Tentang</a>
            <li class="dropdown">
            <a class="nav-item nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>Laboratorium<i class="fa fa-chevron-circle-down"></i></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-circle-right"></i>Lab. Multimedia</a>
                    <a class="dropdown-item" href="lab_rpl.html"><i class="fa fa-chevron-circle-right"></i>Lab. Rekayasa Perangkat Lunak</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-circle-right"></i>Lab. Pemrograman</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-circle-right"></i>Lab. Pengolahan Citra Digital</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-circle-right"></i>Lab. Jaringan</a>
                </div>
                </li>
                <li class="dropdown">
                  <a class="nav-item nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>Civitas<i class="fa fa-chevron-circle-down"></i></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#"><i class="fa fa-chevron-circle-right"></i>Dosen</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-chevron-circle-right"></i>Mahasiswa</a>
                  </div>
                  </li>
            <a class="nav-item btn btn-primary tombol" href="#">Arsip</a>
        </div>
        </div>
    </div>
  </nav>
  <!-- Akhir Navbar-->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img height="500" class="d-block w-100" src="img/01.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img height="500" class="d-block w-100" src="img/02.png" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




  <!-- Jumbotron-->

  <!-- Akhir Jumbotron-->

  <!-- Container-->
    <div class="container">
    <!-- Info Panel-->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="img/employee.jpg" alt="employee" class="float-left">
                        <h4>Teknisi</h4>
                        <p>XXXXX XXXXX, S. Kom</p>
                    </div>
                    <div class="col-lg">
                        <img src="img/hires.jpg" alt="hires" class="float-left">
                        <h4>Ketua Laboratorim</h4>
                        <p>Lukman Hakim, S.Kom., M.Kom.</p>
                    </div>
                    <div class="col-lg">
                        <img src="img/security.jpg" alt="security" class="float-left">
                        <h4>Teknisi</h4>
                        <p>YYYYY YYYYY, S. Kom</p>
                    </div>
                </div>
            </div>
        </div>
    <!-- Akhir Info Panel-->
    
    <!-- Workingspace-->
        <div class="row workingspace">
            <div class="col-lg-6">
                <img src="img/workingspace.jpg" alt="Workingspace" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3><span>workshop</span> pelatihan dosen <span>Fakultas Teknik</span></h3>
                <p>Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
                <a href="" class="btn btn-primary tombol">More</a>
            </div>
        </div>
    <!-- Akhir Workingspace-->

    <!-- Workingspace 2-->
    <div class="row workingspace">
      <div class="col-lg-5">
        <h3><span>workshop</span> pelatihan dosen <span>Fakultas Teknik</span></h3>
        <p>Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
        <a href="" class="btn btn-primary tombol">More</a>
    </div>
      <div class="col-lg-6">
          <img src="img/workingspace.jpg" alt="Workingspace" class="img-fluid">
      </div>
  </div>
<!-- Akhir Workingspace 2-->

<!-- Workingspace-->
<div class="row workingspace">
  <div class="col-lg-6">
      <img src="img/workingspace.jpg" alt="Workingspace" class="img-fluid">
  </div>
  <div class="col-lg-5">
      <h3><span>workshop</span> pelatihan dosen <span>Fakultas Teknik</span></h3>
      <p>Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
      <a href="" class="btn btn-primary tombol">More</a>
  </div>
</div>
<!-- Akhir Workingspace-->

<!-- Workingspace 2-->
<div class="row workingspace">
  <div class="col-lg-5">
  <h3><span>workshop</span> pelatihan dosen <span>Fakultas Teknik</span></h3>
  <p>Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
  <a href="" class="btn btn-primary tombol">More</a>
  </div>
  <div class="col-lg-6">
  <img src="img/workingspace.jpg" alt="Workingspace" class="img-fluid">
  </div>
  </div>
  <!-- Akhir Workingspace 2-->

<!-- Workingspace-->
<div class="row workingspace">
  <div class="col-lg-6">
      <img src="img/workingspace.jpg" alt="Workingspace" class="img-fluid">
  </div>
  <div class="col-lg-5">
      <h3><span>workshop</span> pelatihan dosen <span>Fakultas Teknik</span></h3>
      <p>Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
      <a href="" class="btn btn-primary tombol">More</a>
  </div>
</div>
<!-- Akhir Workingspace-->

<!-- Workingspace 2-->
<div class="row workingspace">
  <div class="col-lg-5">
  <h3><span>workshop</span> pelatihan dosen <span>Fakultas Teknik</span></h3>
  <p>Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
  <a href="" class="btn btn-primary tombol">More</a>
  </div>
  <div class="col-lg-6">
  <img src="img/workingspace.jpg" alt="Workingspace" class="img-fluid">
  </div>
  </div>
  <!-- Akhir Workingspace 2-->
  
    </div><br><br>
  <!-- Akhir Container-->

  <!-- Footer-->
  <div class="row footer bg-primary">
    <div class="col text-center ">
        <p>2021 All Right Reserved by Praktikum</p>
    </div>
  </div>
  <!-- Akhir Footer-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
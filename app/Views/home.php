<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href=<?php echo base_url('images/tutwurihandayani.png'); ?> />
  <title>LLDIKTI Wilayah 4 - Lembaga Layanan Pendidikan Tinggi Wilayah 4</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href=<?php echo base_url('css/bootstrap.min.css'); ?> />
  <!-- Map CSS -->
  <link rel="stylesheet" href=<?php echo base_url('css/map.css'); ?> />
  <!-- fa icon -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
  <!-- hr white -->
  <style>
    hr.new {
      border-top: 1px solid white;
    }
  </style>

  <!-- maps style -->
  <style>
                  .mapouter {
                    position: relative;
                    text-align: right;
                    height: 200px;
                    width: 240px;
                  }
                </style>
                <style>
                  .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 200px;
                    width: 240px;
                  }
                </style>
</head>

<body>

  <!-- <header style="background-color: #2657A7;">
<div class="row">
  <div class="col-md-8"><font  size="5" color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"> 022-727-5630</i></font></div>
  <div class="col-md-4"><font  size="5" color="#FFFFFF">.col-md-4</font></div>
</div>
</header> -->
  <!-- <div class="card text-white" style="background-color: #0076ae">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8" margin>
          <div class="mx-auto" style="width: 200px;">
          <font style="color:#FFFFFF; size:20px">Search</font></div>
        </div>
        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
      </div>
    </div>
  </div> -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img class="img-fluid" src=<?php echo base_url('images/v2lldikti4.png'); ?>>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Info dropdown dokumen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Akuntabilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Berita dropdown 5 kategori</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Beasiswa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Kegiatan</a>
        </li>
<!-- 
        <li class="nav-item">
          <a class="nav-link" href="#">Dokumen</a>
        </li> -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layanan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Layanan Online</a>
            <a class="dropdown-item" href="#">Layanan Kami</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Cara Pengajuan Layanan</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Informasi Publik
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Layanan Online</a>
            <a class="dropdown-item" href="#">Layanan Kami</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Cara Pengajuan Layanan</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Pengaduan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari Informasi" aria-label="Search">
        <button class="btn" style="background-color: #f69930;" type="submit">
          <font style="color:#FFFFFF"><b>Search</b></font>
        </button>
      </form>
    </div>
  </nav>

  <!-- <header class="jumbotron"> -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src=<?php echo base_url('images/banner1.jpg'); ?> alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 1</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src=<?php echo base_url('images/banner.jpg'); ?> alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 2</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src=<?php echo base_url('images/banner2.jpg'); ?> alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 3</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src=<?php echo base_url('images/banner3.jpg'); ?> alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 4</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
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
  <!-- </header> -->

  <!-- <div class="card text-white" style="background-color: #2657A7"> -->
  <!-- <div class="card text-white" style="background-color: #FFB94C"> -->
  <div class="card text-white" style="background-color: #0076ae;">
    <div class="card-body">
      <center>
        <b>
          <h2 class="card-title">
            <font style="color:#FFFFFF">Sebaran Perguruan Tinggi</font>
          </h2>
        </b>
      </center>
      <br>
      <!-- <div class="container"> -->
      <div class="row">
        <div class="col">
          <center>
            <h1>
              <font style="color:#FFFFFF">98</font>
            </h1>
          </center>
          <center>
            <h4>
              <font style="color:#FFFFFF">Universitas</font>
            </h4>
          </center>
        </div>
        <div class="col">
          <center>
            <h1>
              <font style="color:#FFFFFF">19</font>
            </h1>
          </center>
          <center>
            <h4>
              <font style="color:#FFFFFF">Institut</font>
            </h4>
          </center>
        </div>
        <div class="col">
          <center>
            <h1>
              <font style="color:#FFFFFF">202</font>
            </h1>
          </center>
          <center>
            <h4>
              <font style="color:#FFFFFF">Sekolah Tinggi</font>
            </h4>
          </center>
        </div>
        <div class="col">
          <center>
            <h1>
              <font style="color:#FFFFFF">84</font>
            </h1>
          </center>
          <center>
            <h4>
              <font style="color:#FFFFFF">Akademi</font>
            </h4>
          </center>
        </div>
        <div class="col">
          <center>
            <h1>
              <font style="color:#FFFFFF">41</font>
            </h1>
          </center>
          <center>
            <h4>
              <font style="color:#FFFFFF">Politeknik</font>
            </h4>
          </center>
        </div>
        <div class="col">
          <center>
            <h1>
              <font style="color:#FFFFFF">5</font>
            </h1>
          </center>
          <center>
            <h4>
              <font style="color:#FFFFFF">Akademi Komunitas</font>
            </h4>
          </center>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
  <br>
  <div class="container">
    <!-- <div class="container section"> -->
    <div class="headline">
      <h5 class="fa fa-caret-square-o-right" style="font-size:30px"> Galeri Kami</h5>
      <hr style="width:100%;text-align:left;margin-left:0">


      <div class="row blog">
        <div class="col-md-12">
          <div id="blogCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#blogCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Carousel items -->
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-3">
                    <a href="#">
                      <img src=<?php echo base_url('images/sample1.png'); ?> alt="Image" style="max-width:100%;">
                    </a>
                  </div>
                  <div class="col-md-3">
                    <a href="#">
                      <img src=<?php echo base_url('images/sample2.png'); ?> alt="Image" style="max-width:100%;">
                    </a>
                  </div>
                  <div class="col-md-3">
                    <a href="#">
                      <img src=<?php echo base_url('images/sample3.png'); ?> alt="Image" style="max-width:100%;">
                    </a>
                  </div>
                  <div class="col-md-3">
                    <a href="#">
                      <img src=<?php echo base_url('images/sample4.png'); ?> alt="Image" style="max-width:100%;">
                    </a>
                  </div>
                </div>
                <!--.row-->
              </div>
              <!--.item-->

              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-3">
                    <a href="#">
                      <img src=<?php echo base_url('images/sample1.png'); ?> alt="Image" style="max-width:100%;">
                    </a>
                  </div>
                  <div class="col-md-3">
                    <a href="#">
                      <img src=<?php echo base_url('images/sample2.png'); ?> alt="Image" style="max-width:100%;">
                    </a>
                  </div>
                  <div class="col-md-3">
                    <a href="#">
                      <img src=<?php echo base_url('images/sample3.png'); ?> alt="Image" style="max-width:100%;">
                    </a>
                  </div>
                  <div class="col-md-3">
                    <a href="#">
                      <img src=<?php echo base_url('images/sample4.png'); ?> alt="Image" style="max-width:100%;">
                    </a>
                  </div>
                </div>
                <!--.row-->
                <!--.row-->
              </div>
              <!--.item-->

            </div>
            <!--.carousel-inner-->
          </div>
          <!--.Carousel-->

        </div>
      </div>
    </div>
    <hr style="width:100%;text-align:left;margin-left:0">
    <!-- </div> -->

    <br>

    <div class="headline">
      <h3 class="fa fa-calendar" style="font-size:30px"> Kegiatan LLDIKTI</h3>
      <hr style="width:100%;text-align:left;margin-left:0">
      <div class="row">
        <div class="col-md-4">
          <h4>Undangan Kegiatan</h4>
          <hr style="width:100%;text-align:left;margin-left:0">
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>

          </div>
          <a href="#">Lihat Semua Undangan</a><br><br>

          <h4>Jadwal Kegiatan </h4>
          <hr style="width:100%;text-align:left;margin-left:0">
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>

          </div>
          <a href="#">Lihat Semua Jadwal Kegiatan LLDIKTI4</a><br><br>
        </div>
        <div class="col-md-8">
          <h4>Kegiatan Terlaksana</h4>
          <hr style="width:100%;text-align:left;margin-left:0">
          <div class="card-group">
            <div class="card">
              <img src=<?php echo base_url('images/sample3.png'); ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img src=<?php echo base_url('images/sample4.png'); ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img src=<?php echo base_url('images/sample5.png'); ?> class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <a href="#">Lihat Semua Kegiatan Terlaksana</a><br><br>
        </div>
      </div>
    </div>
    <hr style="width:100%;text-align:left;margin-left:0">
  </div>

  <div>



    <br>
    <div class="container">
      <div class="headline">
        <h3 class="fa fa-newspaper-o" style="font-size:30px"> Berita LLDIKTI</h3>
        <hr style="width:100%;text-align:left;margin-left:0">
        <div class="row">
          <div class="col-md-8">
            <h4>Berita Terbaru</h4>
            <hr style="width:100%;text-align:left;margin-left:0">
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src=<?php echo base_url('images/sample1.png'); ?> class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">17 September 2021</small></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src=<?php echo base_url('images/sample2.png'); ?> class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">17 September 2021</small></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src=<?php echo base_url('images/sample3.png'); ?> class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">17 September 2021</small></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src=<?php echo base_url('images/sample4.png'); ?> class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">17 September 2021</small></p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-header" style="background-color: #0076ae">
                <b>
                  <font style="color:#FFFFFF">Berita Lainnya</font>
                </b>
              </div>
              <div class="card-body">
        
              <p>Lorem Ipsum </p>
          <hr style="width:100%;text-align:left;margin-left:0">
          <p>Lorem Ipsum </p>
          <hr style="width:100%;text-align:left;margin-left:0">
          <p>Lorem Ipsum </p>
          <hr style="width:100%;text-align:left;margin-left:0">
          <p>Lorem Ipsum </p>
          <hr style="width:100%;text-align:left;margin-left:0">
          <p>Lorem Ipsum </p>
          <hr style="width:100%;text-align:left;margin-left:0">

                <a href="#">Lihat Semua Berita</a>

              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-header" style="background-color: #f69930">
                <b>
                  <font style="color:#FFFFFF">Beasiswa</font>
                </b>
              </div>
              <div class="card-body">
          <p>Lorem Ipsum </p>
          <hr style="width:100%;text-align:left;margin-left:0">
          <p>Lorem Ipsum </p>
          <hr style="width:100%;text-align:left;margin-left:0">
          <p>Lorem Ipsum </p>
          <hr style="width:100%;text-align:left;margin-left:0">
                <a href="#">Semua Beasiswa</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <hr style="width:100%;text-align:left;margin-left:0">
    </div>
  </div>

  <br>

  <div class="container">
    <div class="headline">
      <h3 class="fa fa-calendar" style="font-size:30px"> Layanan LLDIKTI</h3>
      <hr style="width:100%;text-align:left;margin-left:0">
      <div class="row">
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="headline">
      <h3 class="fa fa-calendar" style="font-size:30px"> Video Kami</h3>
      <hr style="width:100%;text-align:left;margin-left:0">
      <div class="row">

        <div class="col-12 col-md-8">
          <iframe id="youtube_video" width="700" height="440" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col">
          <div>
            <iframe id="youtube_video2" width="150" height="100" frameborder="0" allowfullscreen></iframe>
            <iframe id="youtube_video3" width="150" height="100" frameborder="0" allowfullscreen></iframe>
            <iframe id="youtube_video4" width="150" height="100" frameborder="0" allowfullscreen></iframe>
            <iframe id="youtube_video5" width="150" height="100" frameborder="0" allowfullscreen></iframe>
            <iframe id="youtube_video6" width="150" height="100" frameborder="0" allowfullscreen></iframe>
            <iframe id="youtube_video7" width="150" height="100" frameborder="0" allowfullscreen></iframe>
            <iframe id="youtube_video8" width="150" height="100" frameborder="0" allowfullscreen></iframe>
            <iframe id="youtube_video9" width="150" height="100" frameborder="0" allowfullscreen></iframe>
          </div>
          <a href="https://www.youtube.com/channel/UCElauai9u-s3jj_OM3wG3Ww/videos">Kunjungi Chanel Youtube Kami</a>
        </div>
      </div>
      <hr style="width:100%;text-align:left;margin-left:0">
    </div>
  </div>
  <br>


  <div class="container">
    <div class="row">

      <div class="col-6 col-md-6">
        <h5>Testimonial</h5>
        <hr style="width:100%;text-align:left;margin-left:0">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <div class="container">
                <div class="row h-100 justify-content-center align-items-center">
                  <img src=<?php echo base_url('images/photo1.png'); ?> margin: auto; class="rounded-circle" alt="Cinque Terre">
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">17 September 2021</small></p>
              </div>
            </div>
          </div>

        </div>

        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <div class="container">
                <div class="row h-100 justify-content-center align-items-center">
                  <img src=<?php echo base_url('images/photo1.png'); ?> margin: auto; class="rounded-circle" alt="Cinque Terre">
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">17 September 2021</small></p>
              </div>
            </div>
          </div>

        </div>
        <a href="#">Lihat Semua Testimoni</a>
      </div>

      <div class="col-6 col-md-6">
        <h5>Ikuti Berita Terbaru LLDIKTI Wilayah 4</h5>
        <hr style="width:100%;text-align:left;margin-left:0">

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Email" aria-label="Search">
          <button class="btn" style="background-color: #f69930;" type="submit">
            <font style="color:#FFFFFF"><b>Langganan</b></font>
          </button>
        </form><br>
        <h5>Ikuti Sosial Media LLDIKTI Wilayah 4</h5>
        <hr style="width:100%;text-align:left;margin-left:0">
        <div class="row">
          <div class="col-6 col-md-3">
            <div class="row h-100 justify-content-center align-items-center">
              <img src=<?php echo base_url('images/facebook-icon.png'); ?> margin: auto; width="50px" height="50px" class="rounded-circle" alt="Cinque Terre">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="row h-100 justify-content-center align-items-center">
              <img src=<?php echo base_url('images/instagram-icon.png'); ?> margin: auto; width="50px" height="50px" class="rounded-circle" alt="Cinque Terre">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="row h-100 justify-content-center align-items-center">
              <img src=<?php echo base_url('images/youtube-icon.png'); ?> margin: auto; width="50px" height="50px" class="rounded-circle" alt="Cinque Terre">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="row h-100 justify-content-center align-items-center">
              <img src=<?php echo base_url('images/twitter-icon.png'); ?> margin: auto; width="50px" height="50px" class="rounded-circle" alt="Cinque Terre">
            </div>
          </div>
        </div>

        <br>
        <h5>Kontak Kami</h5>
        <hr style="width:100%;text-align:left;margin-left:0">
        <div class="row">
          <div class="col-6 col-md-3">
            <div class="row h-100 justify-content-center align-items-center">
              <img src=<?php echo base_url('images/whatsapp-icon.png'); ?> margin: auto; width="50px" height="50px" class="rounded-circle" alt="Cinque Terre">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="row h-100 justify-content-center align-items-center">
              <img src=<?php echo base_url('images/email-icon.png'); ?> margin: auto; width="50px" height="50px" class="rounded-circle" alt="Cinque Terre">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <!-- add here -->
          </div>
          <div class="col-6 col-md-3">
            <!-- add here -->
          </div>
        </div>

        <hr style="width:100%;text-align:left;margin-left:0">
      </div>
    </div>
    <br>
  </div>
  </div>
  </div>



  </iframe>
  </div>
  </div>


  <div class="card text-white" style="background-color: #0076ae">
    <div class="card-body">
      <!-- <div class="container"> -->
        <div class="row">
          <div class="col">
            <img class="img-fluid" src=<?php echo base_url('images/v2lldikti4-white.png'); ?>>
          </div>
          <div class="col"><b>Lokasi LLDIKTI Wilayah 4</b></div>
          <div class="col"><b>Contact Information</b></div>
          <div class="col"><b>Tautan Penting</b></div>
          <div class="w-100"></div>
          <div class="col">
            <p><br>LLDIKTI Wilayah 4 memiliki tugas melaksanakan fasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di provinsi Jawa Barat. Dalam melaksanakan tugas fasilitasi peningkatan mutu tersebut</p><br> <u><a href="#" style="color:#FFFFFF">
                <p>Baca Selengkapnya</p>
              </a></u>
          </div>
          <div class="col"><br>Jalan Penghulu H. Hasan Mustofa No. 38 Bandung <br>
            <div class="mapouter">
              <br><div class="gmap_canvas"><iframe width="240" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=LLDIKTI%20Wilayah4&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br>
               
              </div>
            </div>
          </div>
          <div class="col"><br>
            <p>Phone: +022 7275630, +022 7274377<br>Email: informasi@lldikti4.or.id<br></p>
          </div>
          <div class="col"><br>Direktori Gurubesar<br>Direktori Doktor<br>Data Kelembagaan<br>Informasi kegiatan LLDIKTI Wilayah 4<br>Beasiswa dosen<br>
            <p>
              <hr class="new" style="width:100%;text-align:left;margin-left:0;color:#FFFFFF">
            <p>Pangkalan Data Pendidikan Tinggi (PD-DIKTI)<br>Ijin Pendirian Perguruan Tinggi Swasta, Program Studi dan Alih Kelola atau Perubahan Perguruan Tinggi Swasta</p>
          </div>
        </div>
      <!-- </div> -->
    </div>
    <!-- </div> -->
  </div>

  <footer style="background-color: #808080">
    <div class="container text-center">
      <font style="color:#FFFFFF">Copyright &copy <?= Date('Y') ?> FutureMemory - Sekolah Tinggi Teknologi Bandung</font>
    </div>
  </footer>

  <!-- Jquery dan Bootsrap JS -->
  <script src=<?php echo base_url('js/jquery.min.js'); ?>></script>
  <script src=<?php echo base_url('js/bootstrap.min.js'); ?>></script>
  <script src=<?php echo base_url('js/map.js'); ?>></script>
  <script src=<?php echo base_url('js/calendar.js'); ?>></script>

  <!-- Script Get Video from Youtube -->
  <script>
    var channelID = "UCElauai9u-s3jj_OM3wG3Ww";
    var reqURL = "https://www.youtube.com/feeds/videos.xml?channel_id=";
    $.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL) + channelID, function(data) {
      var link = data.items[0].link;
      var id = link.substr(link.indexOf("=") + 1);
      $("#youtube_video").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[1].link;
      var id = link.substr(link.indexOf("=") + 1);
      $("#youtube_video2").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[2].link;
      var id = link.substr(link.indexOf("=") + 1);
      $("#youtube_video3").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[3].link;
      var id = link.substr(link.indexOf("=") + 1);
      $("#youtube_video4").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[4].link;
      var id = link.substr(link.indexOf("=") + 1);
      $("#youtube_video5").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[5].link;
      var id = link.substr(link.indexOf("=") + 1);
      $("#youtube_video6").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[6].link;
      var id = link.substr(link.indexOf("=") + 1);
      $("#youtube_video7").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[7].link;
      $("#youtube_video8").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[8].link;
      $("#youtube_video9").attr("src", "https://youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0");
      var link = data.items[9].link;

    });
  </script>



</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>ABOUT US</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style type="text/css">
    body{
      font-family: Helvetica;
      font-size: 16px;
    }
    .slogan{
      font-family: PT Serif;
      font-style: italic;
      font-size: 18px;
      color: black;
      margin-top: 2%;
    }

    .login{
      font-size: 15px;
      margin-top: 50%;
      color: black;
      font-weight: bold;
    }

    .garis{
      height: 2px;
      width: auto;
      background-color: #AF7817;
    }

    .navr {
      font-weight: bold;
    }

    .fixed-top{
      background-color: white;
    }

    .login:hover{
      color: #AF7817;
      text-decoration: none;
    }

    .creator{
      background-color: #AF7817;
    }

    .lampu{
      margin: 100% 25%;
    }

     .sampahse{

    }

     .ul1 li{
      list-style-type:none;
      height: 36px;
      font-size: 18px;
      font-family: Chaparral Pro Light;
      font-weight:400;
    }

    .ul1 li span{

    }

    .ul1 {
      margin-left: 0;
      padding: 0;
    }
    .ul1 li a{
      color: black;
      font-style: italic;
    }

    li a:hover{
        text-decoration: none;
        color: #AF7817;   
    }

    .kotak1-judul h3{
      text-transform: uppercase;
      color: #AF7817; 
      font-weight: 600;
      padding-bottom: 35px;

    }

    .create-by{
      color: #AF7817;
    }

    .create-by:hover{
      font-weight: bold;
      text-decoration: none;
      color: #AF7817;
    }

    .dropdown:hover .dropdown-menu:hover .dropdown-item:hover{
      color: white;
      background-color: #AF7817; 
    }

    .nav-item .nav-link{
      color: black;
      text-decoration: none;
      font-weight: bold;
    }
    .nav-item:hover .nav-link:hover{
      color: #AF7817;
    }

    .nav-item:active .nav-link{
      color: #AF7817;
    }

    #drop:hover #navbardrop:hover{
      color: #AF7817; 
    }

     .tulis0{
      font-size: 16px;
      color:black;
      text-align: justify;
      padding-left: 50px;
      }

    .tulis{
      font-size: 16px;
      color:black;
      text-align: justify;
      width: 100%;
      }

    .tulis1{
      font-size: 20px;
      color:white;
      text-align: justify;
      font-weight: bold;
    }

    .tulis2{
      font-size: 18px;
      color:black;
      text-align: justify;
      font-weight: bold;
    }

    .tulis3{
      font-size: 20px;
      color:white;
      text-align: justify;
      padding-left: 400px;
      font-weight: bold;
    }

    .tulis4{
      font-size: 16px;
      color:black;
      text-align: justify;
      padding-left: 400px;
    }

    .tuliss{
      margin-top: 55px;
    }

    .tulisss{
      margin-top: 55px;
    }

    .poto{
      padding-left: 10px;
    }

    .poto1{
      background-color: white;
      border-radius: 20px 20px 20px;
      padding-left: 10px;
      width: 350px;
      height: 280px;
      border: 4px solid black; 
      padding: 10px;
      margin:none;
      margin-top: 35px;
      margin-left: 10%;
    }

    .garis1{
      height: 1px;
      width: auto;
      background-color: grey;
    }

    .poto2{
      background-color: white;
      border-radius: 20px 20px 20px;
      padding-right: 10px;
      width: 350px;
      height: 280px;
      border: 4px solid black;
      padding:10px;
      margin:20px;
      margin-top: 40px;
    }

    .carousel-caption {
      text-align: center;
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    height: 150px;
    padding: 20px;
    background: #333333;
    background: rgba(0, 0, 0, 0.5);
}
.carousel-caption p {
    margin-bottom: 0;
}

#rw2{
  background-color: #AF7817;
  margin: 0px;
}

#rw3{
  background-color: grey;
  margin: 0px;
}

#img5{
      margin-top: 13%;
      color: black;
      font-weight: bold;
      float: right;
    }

    #img5:hover{
      border: 1px solid  #AF7817;
    }

.fa:hover{
      color: #AF7817;
      text-decoration: none;
  }

</style>
</head>
<body>

  <!-- NAVBAR -->

  <div class="fixed-top">
    <div class="container">
      <?php echo $this->session->flashdata('info'); ?>
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 col-8">
         <div class="slogan">"Everyone Can be an Artist"</div>
        </div>
         <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 col-1" style="margin-top: 1%;"><a href="<?php echo site_url('cHome/keranjangl'); ?>" class="krj" style="color: black;"><i style="font-size:200%" class="fa" style="float: right;">&#xf07a;</i></a></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2">
         <a  href="<?php echo site_url('cHome/profile/'.$this->session->userdata('username')); ?>" class="login">
            <div style="margin-top: 12%; font-size: 16px; text-align: center;"> <?php echo $this->session->userdata('username'); ?> </div>
          </a>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 col-1">
          <a href="<?php echo site_url('cLogin/logout'); ?>" class="login" ><div style="margin-top: 30%">LOGOUT</div></a>
        </div>
      </div>
    </div>
    <div class="garis"></div>
    <ul class="nav justify-content-center">
      <li style="text-align: center; height: 50%">
        <img class="sampahse" href="<?php echo site_url('cHome'); ?>" src="<?php echo base_url() ?>/foto/logoWEBPRO.jpg" height="100%" width="6%" style="margin-top: 1%">
      </li>
    </ul>
    <ul class="nav justify-content-center" class="navr">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('cHome'); ?>">HOME</a>
      </li>
      <li class="nav-item dropdown" id="drop">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">STORE</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('cHome/clock'); ?>">Clock</a>
            <a class="dropdown-item" href="<?php echo site_url('cHome/lamp'); ?>">Decorative Lamp</a>
            <a class="dropdown-item" href="<?php echo site_url('cHome/ashtray'); ?>">Ashtray</a>
            <a class="dropdown-item" href="<?php echo site_url('cHome/bag'); ?>">Bag</a>
          </div>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('cHome/aboutUs'); ?>">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('cHome/contactUs'); ?>">CONTACT US</a>
      </li>
    </ul>
  </div>

  <!-- Body -->

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="margin-top: 15%; height: 50%">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" class="img-fluid" src="<?php echo base_url() ?>/foto/karieraV2.jpg" width="30%" height="500" alt="First slide">
            <div class="carousel-caption">
              <p>Perusahaan kami bergerak di bidang kerajinan khas dari daerah-daerah yang ada di Indonesia, dengan didukung oleh pengerajinan dari berbagai daerah yang tersebar di seluruh Indonesia. Kami berusaha untuk senantiasa meningkatkan produktivitas serta kualitas dari produk yang ditawarkan, desain produk yang selalu berganti dengan harga yang relative murah merupakan tujuan utama kami. Kami selalu berusaha memberikan yang terbaik buat pelanggan, dengan harga yang terjangkau dan bisa mendapatkan kualitas yang baik.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" class="img-fluid" src="<?php echo base_url() ?>/foto/Employee-Background-Check-Best-Practices-to-Protec_217124.jpg" width="30%" height="500" alt="Second slide">
            <div class="carousel-caption">
              <p>Perusahaan kami bergerak di bidang kerajinan khas dari daerah-daerah yang ada di Indonesia, dengan didukung oleh pengerajinan dari berbagai daerah yang tersebar di seluruh Indonesia. Kami berusaha untuk senantiasa meningkatkan produktivitas serta kualitas dari produk yang ditawarkan, desain produk yang selalu berganti dengan harga yang relative murah merupakan tujuan utama kami. Kami selalu berusaha memberikan yang terbaik buat pelanggan, dengan harga yang terjangkau dan bisa mendapatkan kualitas yang baik.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" class="img-fluid" src="<?php echo base_url() ?>/foto/bigstock-4376835-Employees_MR-1024x433.jpg" width="30%" height="500" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <p>Perusahaan kami bergerak di bidang kerajinan khas dari daerah-daerah yang ada di Indonesia, dengan didukung oleh pengerajinan dari berbagai daerah yang tersebar di seluruh Indonesia. Kami berusaha untuk senantiasa meningkatkan produktivitas serta kualitas dari produk yang ditawarkan, desain produk yang selalu berganti dengan harga yang relative murah merupakan tujuan utama kami. Kami selalu berusaha memberikan yang terbaik buat pelanggan, dengan harga yang terjangkau dan bisa mendapatkan kualitas yang baik.</p>
            </div>
        </div>
      </div>
  </div>
  
<br>
<br>
<br>
<div class="nav justify-content-center">
  <h4>THE TEAM</h4>
</div>
<div class="garis1"></div>
<br>

<img src="<?php echo base_url() ?>/foto/top.png" width="100%">
<div class="row" id="rw2" style="width: 100%">
  
  <div class="col-4 col-xs-4 col-md-4 col-lg-4 col-xl-4">
    <img src="<?php echo base_url() ?>/foto/IMG_2684.JPG" class="poto1">
  </div>
  <div class="col-1 col-xs-1 col-md-1 col-lg-1 col-xl-1"></div>
  <div class="col-5 col-xs-5 col-md-5 col-lg-5 col-xl-5">
    <div class="tuliss">
      <div class="tulis1">
        <h3>Ikbal Tawakal</h3>
        <div class="tulis2">
          <br>Bekerja Pada Store, profil dan produk list
        </div>
      </div>  
      <div class="tulis">
        <br>Panggilan : Ikbal
        <br>TTL       : Kuningan, 08 Maret 1997
        <br>Hobbi     : Futsal
        <br>NIM       : 1301164480
        <br>Mahasiswa Telkom University Jurusan S1 Teknik Informatika
        
      </div> 
  </div>
</div>
  <br>
  <br>
</div>
<img src="<?php echo base_url() ?>/foto/bottom.png" width="100%">
<br>
<br>

<img src="<?php echo base_url() ?>/foto/top1.png" width="100%">
<div class="row" id="rw3" style="width: 100%">
  
  <div class="col-1 col-xs-1 col-sm-1 col-md-1 col-md-1 col-md-1"></div>
  <div class="col-5 col-xs-5 col-md-5 col-lg-5 col-xl-5">
      <div class="tulisss">
      <div class="tulis1">
        <h3>Dwi Kuncoro Aji</h3>
        <div class="tulis2">
          <br>Bekerja Pada Bagian About Us dan Video
        </div>
      </div>  
      <div class="tulis">
        <br>Panggilan : Kucur
        <br>TTL       : 13 Februari 1998
        <br>Hobbi     : Futsal, Tenis Meja
        <br>NIM       : 1301160253
        <br>Mahasiswa Telkom University Jurusan S1 Teknik Informatika
      </div> 
      </div>
  </div>
  <div class="col-4 col-xs-4 col-md-4 col-lg-4 col-xl-4">
      <img src="<?php echo base_url() ?>/foto/90BC4A18-897E-4ABD-A8F2-EC8D53FEC369.jpeg" class="poto2">
  </div>
</div>
<img src="<?php echo base_url() ?>/foto/bottom1.png" width="100%">
<br>
<br>


<img src="<?php echo base_url() ?>/foto/top.png" width="100%">
<div class="row" id="rw2" style="width: 100%">
  
  <div class="col-4 col-xs-4 col-md-4 col-lg-4 col-xl-4">
    <img src="<?php echo base_url() ?>/foto/DSC_0203.JPG" class="poto1">
  </div>
  <div class="col-1 col-xs-1 col-md-1 col-lg-1 col-xl-1"></div>
  <div class="col-5 col-xs-5 col-md-5 col-lg-5 col-xl-5">
    <div class="tuliss">
      <div class="tulis1">
        <h3>Nur Bahrul Ulum</h3>
        <div class="tulis2">
          <br>Bekerja Pada Bagian Login dan Contact Us
        </div>
      </div>  
      <div class="tulis">
        <br>Panggilan : Ulum
        <br>TTL       : Tentena, 14 April 1998
        <br>Hobbi     : Futsal
        <br>NIM       : 1301160315
        <br>Mahasiswa Telkom University Jurusan S1 Teknik Informatika
      </div> 
  </div>
</div>
  <br>
  <br>
</div>
<img src="<?php echo base_url() ?>/foto/bottom.png" width="100%"><br>
<br>
<img src="<?php echo base_url() ?>/foto/top1.png" width="100%">

<div class="row" id="rw3" style="width: 100%">
  
  <div class="col-1 col-xs-1 col-sm-1 col-md-1 col-md-1 col-md-1"></div>
  <div class="col-5 col-xs-5 col-md-5 col-lg-5 col-xl-5">
      <div class="tulisss">
      <div class="tulis1">
        <h3>Novaldy Fajarae</h3>
        <div class="tulis2">
          <br>Bekerja Pada Bagian Home dan Logo
        </div>
      </div>  
      <div class="tulis">
        <br>Panggilan : Noval
        <br>TTL       : Pontianak, 23 November 1998
        <br>Hobbi     : Futsal, Hiking, Traveling
        <br>NIM       : 1301164480
        <br>Mahasiswa Telkom University Jurusan S1 Teknik Informatika
      </div> 
      </div>
  </div>
  <div class="col-4 col-xs-4 col-md-4 col-lg-4 col-xl-4">
      <img src="<?php echo base_url() ?>/foto/novaldy%20fajarae.JPG" class="poto2">
  </div>
</div>
<img src="<?php echo base_url() ?>/foto/bottom1.png" width="100%">
<br>
<br>

<!--- FOOTER -->

   <footer style="margin-top: 4%">
    <div class="container">
      <div class="row">
        <div class="layout-column col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align: center;">
            <img src="<?php echo base_url() ?>/foto/logoWEBPRO.jpg" height="80%" width="70%" style="margin-top:10% ">
        </div>
        <div class="layout-column col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="kotak1">
            <div class="kotak1-judul">
              <h3>Information</h3>
            </div>
            <ul class="ul1">
              <li>
                <a href="<?php echo site_url('cHome/ashtray'); ?>">Store</a>
              </li>
              <li>
                <a href="<?php echo site_url('cHome/aboutUs'); ?>">About Us</a>
              </li>
              <li>
                <a href="<?php echo site_url('cHome/vidio'); ?>">Video</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="layout-column col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="kotak1">
            <div class="kotak1-judul">
              <h3>Contact Us</h3>
            </div>
            <ul class="ul1">
              <li>
                <span>Bandung Indonesia</span>
              </li>
              <li>
                <span>Line : #</span>
              </li>
              <li>
                <span>Phone/WA : #</span>
              </li>
              <li>
                <span>Email : #</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Insert Your Copyright Here -->
    <p style="font-size: 12px; text-align: center;">Copyrigt &#169; 2018 - All Right reserved • Design by <a class="create-by" href="">RECYCLE SQUAD</a></p>
  </footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
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

    .logout{
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

    .logout:hover{
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
      color: blue;
    }

    .create-by:hover{
      font-weight: bold;
      text-decoration: none;
      color: red;
    }

    .dropdown:hover .dropdown-menu:hover .dropdown-item:hover{
      color: white;
      background-color: #092756; 
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

  <!-- NAVBAR -->

<div class="fixed-top">

  <?php echo $this->session->flashdata('login'); ?>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark sticky-top" style="">
    <div class="container-fluid">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navbar3SupportedContent" data-target="#navbar3SupportedContent" aria-expanded="true" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="navbar-collapse text-center justify-content-start collapse show" id="navbar3SupportedContent" style="">
        <ul class="navbar-nav mr-5" style="">
          <a class="navbar-brand mr-5" href="<?php echo site_url('cHome'); ?>"><img src="<?php echo base_url(); ?>pic/MeserkapalTitle.png" class="d-inline-block align-top" alt="" width="200"></a>
          <!-- <li class="nav-item mx-3 pt-3">
            <a class="nav-link text-light" href="#"><b style="" class="ml-5">Etalase<br></b></a>
          </li> -->
          <li class="nav-item dropdown" id="drop">
            <a class="nav-link text-light dropdown-toggle" href="#" id="navbardrop" style="margin-top:19%;" data-toggle="dropdown">Etalase</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo site_url('cHome/clock'); ?>">Boeing</a>
              <a class="dropdown-item" href="<?php echo site_url('cHome/lamp'); ?>">AirBus</a>
              <a class="dropdown-item" href="<?php echo site_url('cHome/ashtray'); ?>">Helicopter</a>
            </div>
          </li>
          <li class="nav-item mx-2 pt-3">
            <a class="nav-link" style="margin-left:10%;" href="<?php echo site_url('cHome/keranjangl')?>"><b>Keranjangmu</b></a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-danger"><a href="<?php echo site_url('cLogin/logout'); ?>" style="color:white;" >KELUAR</div></a></button>
    </div>
  </nav>
  </div>

<!-- BODY -->
  

  <br>
  <br>
  <br>
  <br>
  <div class="py-5 bg-light flex-grow-0" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="m-0 text-center">Mau Beli Apa Hari Ini?</p>
          <h2 class="mb-4 text-primary text-center">Ini Etalase Kami</h2>
          <div class="row">
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="<?php echo base_url(); ?>pic/777.png">
              <h5 class="text-dark" style=""><b>Pesawat Boeing</b></h5>
              <p class="mb-3">Pesawat dengan aerodinamis sangat lincah cocok untuk anda yang menyukai kemewahan</p>
              <a href="<?php echo site_url('cHome/clock'); ?>" class="btn btn-outline-primary"><b class="">Mau Ini!</b></a>
            </div>
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="<?php echo base_url(); ?>pic/a380.jpg">
              <h5 class="" style=""><b>Pesawat AirBus</b></h5>
              <p class="mb-3">Pesawat yang cocok bagi kamu yang memiliki barang bawaan sangat banyak, dengan kapasitas bensin yang banyak</p>
              <a href="<?php echo site_url('cHome/lamp'); ?>" class="btn btn-outline-primary"><b class="">Mau Ini!</b></a>
            </div>
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="<?php echo base_url(); ?>pic/Bell-407.jpg">
              <h5 class=""><b>Helicopter &nbsp;</b></h5>
              <p class="mb-3">Bosan dengan sayap?susah cari tempat mendarat? dimensi sangat besar? coba Helikopter kami</p>
              <a href="<?php echo site_url('cHome/ashtray'); ?>" class="btn btn-outline-primary"><b class="">Mau Ini!</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--- FOOTER -->

   <footer style="background-color:#E0E0E0;">
    <div class="container">
      <div class="row">
        <div class="layout-column col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align: center;">
            <img src="<?php echo base_url() ?>/foto/logoWEBPRO.jpg" height="80%" width="70%" style="margin-top:10% ">
        </div>
        <div class="layout-column col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="kotak1">
            <div class="kotak1-judul">
              <h2 class="mb-4 text-primary text">Bingung? </h2>
              <h2 class="mb-4 text-primary text">Hubungi Kami Saja </h2>
            </div>
            <ul class="ul1">
              <li>
                <span>Dayeuhkolot,Indonesia</span>
              </li>
              <li>
                <span>Line : @himaiftelkomuniv</span>
              </li>
              <li>
                <span>Phone/WA : +62 812-9320-2990</span>
              </li>
              <li>
                <span>Email : imkfutsalan@gmail.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Insert Your Copyright Here -->
    <p style="font-size: 12px; text-align: center;">Copyright &#169; 2018 - All Right reserved • Design by <a class="create-by" href="">Aircraft Hood</a></p>
  </footer>

</body>
</html>
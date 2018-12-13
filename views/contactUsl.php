<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US</title>
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

  <div style="margin-top: 18%;"></div>

<!-- BODY -->

<div class="container">
  <div class="row">
    <div class="nomor col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3"">
      <p class="h">085522334477</p>
      <p class="h">Line : recycleSquad</p>
      <p class="h">Bandung, Indonesia</p>
    </div>
    <div class="kontak col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 col-9">

      <form action="<?php echo site_url("cKontak/addKontak"); ?>" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Message</label>
          <textarea class="form form-control" id="message" name="message" placeholder="We Would Love To Hear From You"></textarea>
        </div>
       
        <button onclick="return confirm('Data Sudah Benar?')" type="submit" class="btn btn-aqua">SEND</button>
    </form>
      
    </div>
  </div>
</div>

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
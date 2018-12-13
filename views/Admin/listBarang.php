<!DOCTYPE html>
<html>
<head>
  <title>LIST PRODUCT</title>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
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

    .sampahse{

    }

     .ul1 li{
      list-style-type:none;
      height: 36px;
      font-size: 18px;
      font-family: Chaparral Pro Light;
      font-weight:400;
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


    #rw{
      border-bottom: 1px solid grey;
    }

    #panel {
      padding: 50px;
      display: none;
    }

    .zoom {
      display:inline-block;
      position: relative;
    }
    
    /* magnifying glass icon */
    .zoom:after {
      content:'';
      display:block; 
      width:33px; 
      height:33px; 
      position:absolute; 
      top:0;
      right:0;
      background:url(icon.png);
    }

    .zoom img {
      display: block;
    }

    .zoom img::selection { background-color: transparent; }

    #ex2 img:hover { cursor: url(grab.cur), default; }
    #ex2 img:active { cursor: url(grabbed.cur), default; }

    .fa:hover{
      color: #AF7817;
      text-decoration: none;
    }

    .logout{
      font-size: 15px;
      margin-top: 50%;
      color: black;
      font-weight: bold;
    }

    .logout:hover{
          color: #AF7817;
          text-decoration: none;
    }
  </style>

  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#data-table').DataTable();
    });
</script>
</head>
<body>
 
  <!-- NAVBAR -->
 <div class="fixed-top">
    <nav class="navbar navbar-expand-md bg-primary navbar-dark sticky-top" style="">
    <div class="container-fluid">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navbar3SupportedContent" data-target="#navbar3SupportedContent" aria-expanded="true" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="navbar-collapse text-center justify-content-start collapse show" id="navbar3SupportedContent" style="">
      <ul class="navbar-nav mr-5" style="">
          <a class="navbar-brand mr-5" href="#"><img src="<?php echo base_url(); ?>pic/MeserkapalTitle.png" class="d-inline-block align-top" alt="" width="200"></a>
        <li class="nav-item" style="margin-top:2%;">
            <a class="nav-link" href="<?php echo site_url('cAdmin'); ?>">PENGGUNA</a>
        </li>
        <li class="nav-item" style="margin-top:2%;">
          <a class="nav-link" href="<?php echo site_url('cAdmin/addBarang'); ?>">TAMBAH PRODUK</a>
        </li>
        <li class="nav-item active" style="margin-top:2%;">
          <a class="nav-link" href="<?php echo site_url('cAdmin/lBarang'); ?>">DAFTAR BARANG</a>
        </li>
      </ul>
      </div>
      <button type="button" class="btn btn-danger"><a href="<?php echo site_url('cLogin/logout'); ?>" style="color:white;" >KELUAR</div></a></button>
    </div>
  </nav>
  </div>
  </div>

  <!-- BODY -->

  <div class="container" style="margin-top: 10%">  
      <h1 align="center" style="font-size: 130%; font-weight: bold;">List Produk</h1><br /> 
      <table id="data-table" class="table table-striped table-bordered" style="width:100%">  
           <thead>  
                <tr>  
                     <th>Name</th>  
                     <th>Type</th>
                     <th>Price</th>  
                     <th></th>
                </tr>
           </thead>  
           <tbody>
             <?php 
                  foreach ($list as $row) {
                ?>
                  <tr>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['jenis'] ?></td>
                    <td>USD. <?php echo number_format($row['harga'],2,',','.') ?></td>
                    <td align="center">
                      <a onclick="return confirm('Yakin Barang Ini Dihapus?')" href="<?php echo site_url("cAdmin/deleteProduk/{$row['id_produk']}") ?> " data-toggle="tooltip" data-placement="bottom" title="Hapus Alamat" class="btn btn-danger" >Delete</a>
                    </td>
                  </tr>
                <?php
                }
                ?>  
           </tbody>
      </table>  
 </div>  

  <!--- FOOTER -->


    <!-- Insert Your Copyright Here -->
    <p style="font-size: 12px; text-align: center;">Copyrigt &#169; 2018 - All Right reserved • Design by <a class="create-by" href="">RECYCLE SQUAD</a></p>
  </footer> 
 
</body>
</html>
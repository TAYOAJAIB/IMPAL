<!DOCTYPE html>
<html>
<head>
  <title>STORE : BAG</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="<?php echo base_url() ?>asset/script.js ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/style.css ?>">
  <script src='<?php echo base_url() ?>asset/jquery.zoom.js ?>'></script>
</head>
<body>
  
  <!-- NAVBAR -->

  <div class="fixed-top">
    <div class="container">
      <?php echo $this->session->flashdata('pesan_belanja'); ?>
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
  <!-- SORT & LAYOUT BAR -->

   <div class="container" style="margin-top: 18%">
    <div class="row" id="rw">
      <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10 col-10">
        <form role="form" class="form-inline">
          <div class="form-group">
          <label>Sort By:</label>
          <select class="sort">
            <option value="volvo">Sort by</option>
            <option>Product Name : A to Z</option>
            <option>Product Name : Z to A</option>
          </select>
          </div>
        </form>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2" style="padding-left: 5%;">
        <button class=" fa fa-th-list" id="list"></button>
        <button class=" fa fa-th-large" id="grid"></button>
      </div>
    </div>

    <!-- LAYOUT LIST -->
    
    <div class="row" id="rw3">
      <?php 
      foreach ($list as $row) {
            if ($row['jenis'] == 'tas') {
      ?>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                <span class='zoom' id='ex<?php echo $row['id_produk'] ?>'>
                 <img src="<?php echo base_url() ?>produk/<?php echo $row['foto'] ?>" height="100%" width="100%">
                </span>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
                <div class="nama">
                  <h3><?php echo $row['nama'] ?></h3>
                </div>
                <div class="harga" style="margin-top: 0px; margin-bottom: 0px;">
                  <p>Rp. <?php echo number_format($row['harga'],2,',','.') ?></p>
                </div>
                <div class="ket" style="margin-top: 0px;">
                  <p><?php echo $row['keterangan'] ?></p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2" style="text-align: center; margin: 0px; padding: 0px; padding-top: 15%;">
                     <button type="button" class="btn btn-warning" id="address" style="font-weight: bold; color: white; font-size: 20px; margin-bottom: 20px; padding: 5%;" data-toggle="modal" data-target="#barang<?php echo $row['id_produk'] ?>">Buy</button>
              </div>
              <!-- The Modal -->
                <div class="modal fade" id="barang<?php echo $row['id_produk'] ?>" >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="width: 4000px;" >
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title"><?php echo $row['nama'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <form method="post" action="<?php echo site_url('cKeranjang/addKeranjang') ?>" name="data" id="data" class="form-inline">
                        <div class="modal-body">
                          <table>
                            <tr>
                                <td><input type="hidden" class="form-control" id="name" name="namaB" style="width: 300px" value="<?php echo $row['nama'] ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" class="form-control" id="pnumber" name="hargaB" style="width: 300px" value="<?php echo $row['harga'] ?>" ></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" class="form-control" id="pnumber" name="jenisB" style="width: 300px" value="<?php echo $row['jenis'] ?>" ></td>
                            </tr>
                            <tr>
                                <td height="50px" width="150px">Jumlah</td>
                                <td>
                                  <input type="number" name="jumlah" class="form-control" pattern="[0-9]+" required>
                                </td>
                            </tr>
                          </table> 
                        </div>
                      
                        <!-- Modal footer -->
                        <div class="modal-footer" style="margin-left: 60%">
                          <input class="btn btn-success" type="submit" value="Pesan">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                        
                    </div>
                  </div>
                </div>
      <?php
            }
    }
    ?>
        
    </div>


    <!-- LAYOUT GRID -->

   <div class="row" id="rw2">
    <?php 
      foreach ($list as $row) {
            if ($row['jenis'] == 'tas') {
      ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                  <div class="foto">
                    <span class='zoom' id='ex<?php echo $row['id_produk']+8 ?>'>
                      <img src="<?php echo base_url() ?>produk/<?php echo $row['foto'] ?>" height="100%" width="100%">
                    </span>
                  </div>
                  <div class="header-produk">
                      <h3 style="text-align: center;"><?php echo $row['nama'] ?></h3>
                  </div>
                  <div class="harga">
                      <p style="text-align: center;">Rp. <?php echo number_format($row['harga'],2,',','.') ?></p>
                  </div>
                  <div style="text-align: center; margin: 0px; padding: 0px;">
                       <button type="button" class="btn btn-warning" id="address" style="font-weight: bold; color: white; font-size: 12px; margin-bottom: 20px; " data-toggle="modal" data-target="#barang<?php echo $row['id_produk']+999 ?>">Beli</button>
                  </div>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="barang<?php echo $row['id_produk']+999 ?>">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title"><?php echo $row['nama'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <form method="post" action="<?php echo site_url('cKeranjang/addKeranjang') ?>" name="data" id="data" class="form-inline">
                        <div class="modal-body">
                          <table>
                            <tr>
                                <td><input type="hidden" class="form-control" id="name" name="namaB" style="width: 300px" value="<?php echo $row['nama'] ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" class="form-control" id="pnumber" name="hargaB" style="width: 300px" value="<?php echo $row['harga'] ?>" ></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" class="form-control" id="pnumber" name="jenisB" style="width: 300px" value="<?php echo $row['jenis'] ?>" ></td>
                            </tr>
                            <tr>
                                <td height="50px" width="150px">Jumlah</td>
                                <td>
                                  <input type="number" name="jumlah" class="form-control" pattern="[0-9]+" required>
                                </td>
                            </tr>
                          </table> 
                        </div>
                      
                        <!-- Modal footer -->
                        <div class="modal-footer" style="margin-left: 60%">
                          <input class="btn btn-success" type="submit" value="Pesan">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                        
                    </div>
                  </div>
                </div>
                <?php
          }
      }
    ?>

     
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
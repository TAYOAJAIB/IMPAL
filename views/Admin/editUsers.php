<!DOCTYPE html>
<html>
<head>
	<title>EDIT USER</title>
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

  <!-- NAVBAR -->
 <div class="fixed-top">
    <nav class="navbar navbar-expand-md bg-primary navbar-dark sticky-top" style="">
    <div class="container-fluid">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navbar3SupportedContent" data-target="#navbar3SupportedContent" aria-expanded="true" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="navbar-collapse text-center justify-content-start collapse show" id="navbar3SupportedContent" style="">
      <ul class="navbar-nav mr-5" style="">
          <a class="navbar-brand mr-5" href="#"><img src="<?php echo base_url(); ?>pic/MeserkapalTitle.png" class="d-inline-block align-top" alt="" width="200"></a>
        <li class="nav-item active" style="margin-top:2%;">
            <a class="nav-link" href="<?php echo site_url('cAdmin'); ?>">PENGGUNA</a>
        </li>
        <li class="nav-item" style="margin-top:2%;">
          <a class="nav-link" href="<?php echo site_url('cAdmin/addBarang'); ?>">TAMBAH PRODUK</a>
        </li>
        <li class="nav-item" style="margin-top:2%;">
          <a class="nav-link" href="<?php echo site_url('cAdmin/lBarang'); ?>">DAFTAR BARANG</a>
        </li>
      </ul>
      </div>
      <button type="button" class="btn btn-danger"><a href="<?php echo site_url('cLogin/logout'); ?>" style="color:white;" >KELUAR</div></a></button>
    </div>
  </nav>
  </div>

<!-- NAVBAR -->

  <!-- BODY -->
    <div class="container" style="margin-top: 10%">  
    <div style="text-align: center; ">
        <h3>Edit Account User</h3>
      </div>
    <div style="height: 1px; width: auto; background-color: black; margin-bottom: 2%;"></div>
    <div class="row">
      
       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3"></div>
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6" id="kotakkiri">
         <form method="post" action="<?php echo site_url('cAdmin/updateAkun') ?>" name="data" id="data" class="form-inline">
          <?php echo form_hidden('username', $data->username); ?>
              <table>
                 <tr>
                  <div class="form-group">
                    <td height="50px" width="150px">Password</td>
                    <td>
                      <?php 
                        echo form_input(['name'=>'password',
                                         'class'=>'form-control',
                                         'placeholder'=>'Password',
                                         'required'=>'',
                                         'value'=>set_value('password', $data->password)]);
                      ?>
                    </td>
                  </div>
                </tr>
                 <tr>
                  <div class="form-group">
                    <td height="50px" width="150px">Email</td>
                    <td>
                      <?php 
                        echo form_input(['name'=>'email',
                                         'class'=>'form-control',
                                         'placeholder'=>'Email',
                                         'required'=>'',
                                         'value'=>set_value('email', $data->email)]);
                      ?>
                    </td>
                  </div>
                </tr>
              </table> 
              <div style="width: 100%; margin-top: 5%">
                <input onclick="return confirm('Data Sudah Benar?')" style="float: right;" class="btn btn-success" type="submit" value="Simpan">
              </div>
        </form>
      </div>
  

  <!--- FOOTER -->

  
    <!-- Insert Your Copyright Here -->
    <p style="font-size: 12px; text-align: center;">Copyrigt &#169; 2018 - All Right reserved • Design by <a class="create-by" href="">RECYCLE SQUAD</a></p>
  </footer>
</body>
</html>
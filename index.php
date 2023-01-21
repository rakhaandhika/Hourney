<?php
session_start();
$nik=$_SESSION['nik'];
$nama=$_SESSION['nama'];

$page=@$_GET['page'];

if(!empty($_SESSION['nik'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOURNEY</title>
  <link rel="stylesheet" href="bs/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="data_table/datatable.css">
  <link href="Assets/logo.png" rel="shortcut icon">
</head>

<body>
  <div class="page" s>
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/bg_3.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <center> <img src="assets/logo.png" align="center" alt="" width="50" height="50"
                  style="margin-bottom: 20px;"> </center>
              <h1 class="mb-4 text-cus text-center">HOURNEY</h1>
              <ul>
                <li><a href="?page=home "><span>Home</span></a></li>
                <li><a href="?page=catatan_perjalanan"><span>Catatan Perjalanan</span></a></li>
                <li><a href="?page=isi_data"><span>Isi Data</span></a></li>
                <li><a href="https://instagram.com/rakhahaha_?igshid=YmMyMTA2M2Y="><span>Kontak</span></a></li>
                <li><a href="?page=logout" onclick="return confirm('Yakin ingin Logout?')"><span>Logout</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div id="colorlib-page" class="paddingcard bg-white">
      <header>
        <div class="container">
          <div class="colorlib-navbar-brand">
            <img src="assets/logo.png" alt="" width="45" height="45" class="marginicon">
            <h2 class="colorlib-logo fontheader text-cus text-center" href="index.html">HOURNEY</h2>
          </div>
          <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        </div>

      </header>

    </div>

    <div class="forest3">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mt-5">
          </div>

          <div class=" ">
            <?php
                    if ($page=='isi_data') {
                        include "isi_data.php";
                    }
                    elseif($page=='home'||empty($page)){
                        include 'home.php';
                    }
                    elseif($page=='catatan_perjalanan'){
                        include 'catatan_perjalanan.php';
                    }
                    elseif($page=='edit'){
                      include 'edit.php';
                    }

                    elseif($page=='logout'){
                        unset($_SESSION['nik']);
                        unset($_SESSION['nama']);
                        header("location:login.php");
                    }
                ?>
          </div>
        </div>
      </div>
    </div>

    <script src="jquery/jquery.js"></script>
    <script src="data_table/jquery.datatable.js"></script>
    <script src="data_table/datatable.bootstrap.js"></script>
    <script src="bs/js/bootstrap.js"></script>
    <script src="bs/js/main.js"></script>
    <script src="bs/js/popper.js"></script>

</body>

</html>
<?php
}
else{
    header("location:login.php");
}
?>
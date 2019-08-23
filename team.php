<?php
$namaSatu = "M Fatur Safarhan";
$umurSatu = 16;
$hobiSatu = "Beatbox";
$citacitaSatu = "Jadi Cinematographer";
$tinggiSatu = 164;

$namaDua = "Risma Astuti";
$umurDua = 16;
$hobiDua = "Nari jaipong";
$citacitaDua = "Ingin menjadi penari";
$tinggiDua = 156;

$namaTiga = "Adelia Putri";
$umurTiga = 15;
$hobiTiga = "Menggambar";
$citacitaTiga = "Ingin menjadi Guru";
$tinggiTiga = 159;

$jumlah = $tinggiSatu + $tinggiDua + $tinggiTiga;
$hasil = $jumlah/3;
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/small-apps/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2019 06:58:48 GMT -->
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tugas_pwpb</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- themify icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- Owl Carousel -->
  <link href="plugins/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet" media="screen">
  <!-- Owl Carousel Theme -->
  <link href="plugins/owl-carousel/assets/owl.theme.green.min.css" rel="stylesheet" media="screen">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
  <!-- AOS -->
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg p-0">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/12.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown active dropdown-slide">
          <a class="nav-link" href="#" data-toggle="dropdown">Home
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php">Homepage</a>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#" data-toggle="dropdown">Tugas
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="team.html">Tugas 1</a>
            <a class="dropdown-item" href="career.html">Tugas 2</a>
          </div>
        </li>
    </div>
  </div>
</nav>

<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h1>Our Team</h1>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->



<!--==================================
=            Feature Team            =
===================================-->

<section class="founders section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<!-- Featured Member -->
<div class="founder">
	<!-- Member Image -->
    <img class="img-fluid" src="images/fatur.JPG" alt="featured-member">
    <?php
          echo "Nama : $namaSatu <br>";
          echo "Umur : $umurSatu <br>";
          echo "Hobi : $hobiSatu <br>";
          echo "Cita-cita : $citacitaSatu <br>";
          echo "Tiggi badan : $tinggiSatu";
    ?>  
	<!-- Social Sites -->
	<ul class="list-inline social-links">
		<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="ti-instagram"></i></a></li>
	</ul>
</div>
			</div>
			<div class="col-lg-6">
				<!-- Featured Member -->
<div class="founder">
	<!-- Member Image -->
	<img class="img-fluid" src="images/adel.JPG" alt="featured-member">
  <?php
          echo "Nama : $namaTiga <br>";
          echo "Umur : $umurTiga <br>";
          echo "Hobi : $hobiTiga <br>";
          echo "Cita-cita : $citacitaTiga <br>";
          echo "Tinggi badan : $tinggiTiga";
        ?>  
	<!-- Social Sites -->
	<ul class="list-inline social-links">
		<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="ti-instagram"></i></a></li>
	</ul>
</div>

<div class="founder">
		<!-- Member Image -->
		<img class="img-fluid" src="images/risma.JPG" alt="featured-member">
    <?php
          echo "Nama : $namaDua <br>";
          echo "Umur : $umurDua <br>";
          echo "Hobi : $hobiDua <br>";
          echo "Cita-cita : $citacitaDua <br>";
          echo "Tiggi badan : $tinggiDua";
        ?>  
		<!-- Social Sites -->
		<ul class="list-inline social-links">
			<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
			<li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
			<li class="list-inline-item"><a href="#"><i class="ti-instagram"></i></a></li>
		</ul>
	</div>
			</div>
		</div>
	</div>
  </div>
      <!-- /.row -->
     <center style="margin-top:50px;"> Rata-rata tinggi kami bertiga yaitu : <?php echo $hasil ?></center>
    </div>
</section>

<!--====  End of Feature Team  ====-->







<!--====  End of Section comment  ====-->




<!--============================
=            Footer            =
=============================-->

<footer>
  <div class="text-center bg-dark py-2">
    <small class="text-secondary">Copyright &copy; 2019 a theme by <a href="https://themefisher.com/">themefisher.com</a></small class="text-secondary">
  </div>
</footer>


  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.js"></script>
  <script src="plugins/popper/popper.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="plugins/google-map/gmap.js"></script>
  
  <script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.themefisher.com/small-apps/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2019 06:59:39 GMT -->
</html>
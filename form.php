<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/small-apps/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2019 06:57:27 GMT -->
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

<?php include("nav.php");?>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">Welcome to our project</h1>
				<p class="text-white mb-5"></p>
				
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="images/laptop.png" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="contact-form section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-4">Identitas Peserta Dididk Baru Tahun Ajaran 2019/2020</h2>
			</div>
			<div class="col-12">
				<form action="" method="post">
					<div class="row">
						<!-- Name -->
						<div class="col-md-6">
							<input class="form-control main" name="nl" type="text" placeholder="Nama Lengkap" required>
						</div>
						<!-- Email -->
						<div class="col-md-6">
							<input class="form-control main" name="np" type="text" placeholder="Nama panggilan" required>
						</div>
						<!-- jk -->
						<div class="col-md-6">
              <div style="margin-bottom:20px;">
                  <p for="">Jenis Kelamin</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
							<input class="form-control main" name="nk" type="text" placeholder="NIK" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="ns" type="number" placeholder="NISN" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="ttl" type="text" placeholder="Tempat Tanggal Lahir" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="aS" type="text" placeholder="Asal Sekolah " required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="noS" type="number" placeholder="Nomor SKHU" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="tanggalID" type="text" placeholder="Tanggal di terima di Sekolah ini" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="jikaP"type="text" placeholder="Jika pindahan sebutkan alasan">
            </div>
            <div class="col-md-6">
              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="agm">
                <option selected>Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Katholik">Katholik</option>
                <option value="Konghucu">Konghucu</option>
              </select>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="tinggal" type="text" placeholder="Tinggal bersama" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main"  name="transportasi" type="text" placeholder="Transportasi sekolah" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="noT" type="number" placeholder="NO. Telp">
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="noH" type="number" placeholder="NO. KPS">
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="noK" type="number" placeholder="NO. HP" required>
            </div>
             <!-- Alamat -->
             <div class="col-12">
              <input class="form-control main" name="alamat" type="text" placeholder="Alamat" required>
			      </div>

            <div class="col-12">
				      <h2 class="mb-4">Data Ayah kandung</h2>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="nama" type="text" placeholder="Nama" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="tahun" type="text" placeholder="Tahun lahir" required>
            </div>
            <div class="col-md-6">
              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="pendidikan" >
                <option selected>Pendidikan</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
              </select>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="pekerjaan" type="text" placeholder="Pekerjaan" required>
            </div>
            <div class="col-md-6">
              <div style="margin-bottom:20px;">
                  <p for="">Penghasilan perBulan</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="penghasilan" id="inlineRadio1" value="<1000.000">
                    <label class="form-check-label" for="inlineRadio1"><1000.000</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="penghasilan" id="inlineRadio1" value=">1000.000">
                    <label class="form-check-label" for="inlineRadio1">>1000.000</label>
                  </div>
              </div>
            </div>
            <div class="col-12">
				      <h2 class="mb-4">Data Ibu kandung</h2>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="namaI" type="text" placeholder="Nama" required>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="tahunI" type="text" placeholder="Tahun lahir" required>
            </div>
            <div class="col-md-6">
              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="pendidikanI">
                <option selected>Pendidikan</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
              </select>
            </div>
            <div class="col-md-6">
							<input class="form-control main" name="pekerjaanI" type="text" placeholder="Pekerjaan" required>
            </div>
            <div class="col-md-6">
              <div style="margin-bottom:20px;">
                  <p for="">Penghasilan perBulan</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="penghasilanI" id="inlineRadio1" value="<1000.000">
                    <label class="form-check-label" for="inlineRadio1"> <1000.000 </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="penghasilanI" id="inlineRadio1" value=">100.000">
                    <label class="form-check-label" for="inlineRadio1"> >1000.000</label>
                  </div>
              </div>
            </div>
						<!-- Submit Button -->
						<div class="col-12 text-right">
							<button name="submit" type="submit" class="btn btn-main-md">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<div class="container">
  <?php
    if(isset($_POST['submit'])){
      echo "<h3>Identitas Peserta Dididk Baru Tahun Ajaran 2019/2020<h3><br>";
      echo "Nama Lengkap:".$_POST['nl']."<br>";
      echo "Nama Panggilan:".$_POST['np']."<br>";
      echo "Jenis Kelamin:".$_POST['jk']."<br>";
      echo "NIK:".$_POST['nk']."<br>";
      echo "NISN:".$_POST['ns']."<br>";
      echo "Tempat Tanggal lahir:".$_POST['ttl']."<br>";
      echo "Asal sekolah:".$_POST['aS']."<br>";
      echo "No.SKHU:".$_POST['noS']."<br>";
      echo "Tanggal di terima di Sekolah ini:".$_POST['tanggalID']."<br>";
      echo "Alasan pindahan:".$_POST['jikaP']."<br>";
      echo "Agama:".$_POST['agm']."<br>";
      echo "Tinggal bersama:".$_POST['tinggal']."<br>";
      echo "Transportasi sekolah:".$_POST['transportasi']."<br>";
      echo "Nomor Telepon:".$_POST['noT']."<br>";
      echo "No HP:".$_POST['noH']."<br>";
      echo "No KPS:".$_POST['noK']."<br><br>"; 
      echo "Alamat:".$_POST['alamat']."<br>";
      echo "Data Ayah Kandung<br>";
      echo "Nama Ayah:".$_POST['nama']."<br>";
      echo "Tahun Lahir:".$_POST['tahun']."<br>";
      echo "Pendidikan:".$_POST['pendidikan']."<br>";
      echo "Pekerjaan:".$_POST['pekerjaan']."<br>";
      echo "Penghasilan Perbulan:".$_POST['penghasilan']."<br><br>";
      echo "Data Ibu Kandung<br>";
      echo "Nama Ibu:".$_POST['namaI']."<br>";
      echo "Tahun Lahir:".$_POST['tahunI']."<br>";
      echo "Pendidikan:".$_POST['pendidikanI']."<br>";
      echo "Pekerjaan:".$_POST['pekerjaanI']."<br>";
      echo "Penghasilan Perbulan:".$_POST['penghasilanI']."<br>";
    }
  ?>
</div>

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
  <script src="plugins/google-map/gmap.js"></script>
  
  <script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.themefisher.com/small-apps/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2019 06:58:00 GMT -->
</html>
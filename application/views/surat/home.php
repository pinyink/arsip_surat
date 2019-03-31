<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>CellOn</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>css/nice-select.css">
		<link rel="stylesheet" href="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>css/main.css">
		<link rel="stylesheet" href="<?php echo base_url().'assets/themes/'; ?>adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" type="text/css" />
	</head>
	<body>
	<div class="oz-body-wrap">
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container-fluid">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<!-- <a href="index.html"><img src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>img/logo.png" alt=""></a> -->
						</div>
						<div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="<?php echo base_url().'login'; ?>">Login</a>
							</nav>
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!-- Start Conatct- Area -->
		<section class="contact-area pt-100 pb-100 relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="single-contact col-lg-6 col-md-8">
						<h2 class="text-white"><span>Pencarian Surat</span></h2>
						<p class="text-white">
						</p>
					</div>
				</div>
				<form action="" method="post">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<select class="form-control" name="jenis" required>
								<option value="" style="color:black">Pilih Surat</option>
								<option value="1">Surat Keluar</option>
								<option value="2">Surat Masuk</option>
							</select>
						</div>
						<div id="dasar" class="col-lg-10">
							<select class="form-control mt-20" name="dasar" required>
								<option value="" style="color:black">Pilih Dasar Pencarian</option>
								<option value="1" style="color:black">No Surat</option>
								<option value="2" style="color:black">Bidang/pengolah</option>
								<option value="3" style="color:black">Tanggal</option>
							</select>
						</div>
						<div id="bidang" class="col-lg-10">
							<select class="form-control mt-20" name="bidang">
								<option value="" style="color:black">Pilih Bidang</option>
								<?php foreach ($bidang as $b): ?>
								<option value="<?php echo $b->id_bidang; ?>"><?php echo $b->nama_bidang; ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div id="no" class="col-lg-10">
							<input name="no" placeholder="No Surat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" type="text">
						</div>
						<div id="tgl" class="col-lg-10">
							<input name="tgl" placeholder="Tgl" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" type="text" value="<?php echo date('d-m-Y'); ?>">
						</div>
						<div class="col-lg-10 d-flex justify-content-end">
							<!-- <button type="submit">Cari</button> -->
							<button type="submit" class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span class="mr-10">Cari</span><span class="lnr lnr-arrow-right"></span></button> <br>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- End Conatct- Area -->
		<div>
			<br/>
			<?php if ($error != 1): ?>
			<div class="alert alert-danger text-center">
				<h4><?php echo $error; ?></h4>
			</div>
			<?php endif ?>
			<br/>
		</div>
		<?php if ($kode == 2): ?>
		<!-- Start Feature Area -->
		<section class="feature-area pt-100 pb-100  relative">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
						<div class="single-feature">
							<h3>Surat Masuk</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<!-- <div class="icon">
								<span class="lnr lnr-laptop"></span>
							</div>
							<div class="desc">
								<h2 class="text-uppercase">The Skinny On Lcd <br>Monitors</h2>
								<p>
									Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their
								</p>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Start Feature Area -->
		<?php endif ?>
		<!-- Strat Footer Area -->
		<footer class="section-gap">
			<div class="container">
				<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> | Created Application by Pin Yink</p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->
	</div>

		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/jquery.counterup.min.js"></script>
		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/waypoints.min.js"></script>
		<script src="<?php echo base_url().'assets/themes/CellOn-colorlib/'; ?>js/main.js"></script>
		<script src="<?php echo base_url().'assets/themes'; ?>/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript">
			$('[name="tgl"]').datepicker({
			      autoclose: true,
			      format: 'dd-mm-yyyy'
			  });

			$('#bidang').hide();
			$('#no').hide();
			$('#tgl').hide();
			$('[name="dasar"]').change(function(event) {
				if ($('[name="dasar"]').val() == 1) {
					$('#bidang').hide();
					$('#no').show();
					$('#tgl').hide();
				};
				if ($('[name="dasar"]').val() == 2) {
					$('#bidang').show();
					$('#no').hide();
					$('#tgl').hide();
				};
				if ($('[name="dasar"]').val() == 3) {
					$('#bidang').hide();
					$('#no').hide();
					$('#tgl').show();
				};
				
			});
		</script>
	</body>
</html>
